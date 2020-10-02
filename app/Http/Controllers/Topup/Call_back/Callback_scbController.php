<?php

namespace App\Http\Controllers\Topup\Call_back;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\My_item;
use App\Market_item;
use App\Transeection_buyItem;
use App\QrPayment;
use App\Package;
use DB;

class Callback_scbController extends Controller
{
    // public function testCallback(){
    //     $qrpayment = QrPayment::Where('invoice', $invoice)->get()->first();
    //     dd($qrpayment->status);
    // }
    
    public function callback(Request $request)
    {
        $invoice = $request->invoice;
        $message = $request->status;
        $qrpayment = QrPayment::Where('invoice', $invoice)->get()->first();
        if (QrPayment::Where('invoice', $invoice)->get()->count()) {
            if ($qrpayment->status === 'false') {
                switch ($message) {
                    case 'success':
                        $status = 'true';
                        break;
                    case 'Expired':
                        $status = 99;
                        break;
                    default;
                        $status = 'false';
                        break; 
                }
                
                $qrpayment->status = $status;
                $qrpayment->confirm_at = date('Y-m-d H:i:s');

                $packageBuy = DB::table('my_package_buy')->where('packageBuy_invoice', $invoice)->first();
                
                if ($packageBuy != null) {
                    $package = DB::table('packages')->where('package_id', $packageBuy->package_id)->first();
                    $packageBuy_status = "true";
                    $packageBuy_start = date('Y-m-d');
                    $Y = date('Y');
                    $m = date('m')+$package->package_season;
                    $d = date('d');
                    $packageBuy_deadline = $Y.'-'.$m.'-'.$d;

                    $data = array("packageBuy_status"=>$packageBuy_status, "packageBuy_start"=>$packageBuy_start, "packageBuy_deadline"=>$packageBuy_deadline, "packageBuy_invoice"=>$invoice);
                    $value = Package::packageBuy($data);

                    $qrpayment->save();
                }else{
                    $transeection = DB::table('transeection_sponshopping')->where('transeection_invoice', $invoice)->first();
                    if($transeection != null){
                        $game = explode(", ", $transeection->transeection_gameSpon);
                        $gameSpon = [];
                        for($i=0;$i<count($game);$i++){
                            $shopping = DB::table('sponsor_shopping_cart')->where([['sponsor_cart_game', $game[$i]], ['USER_ID', $transeection->USER_ID], ['sponsor_cart_status', 'false']])->first();
                            $sponsor_cart_id = $shopping->sponsor_cart_id;
                            $sponsor_cart_status = "true";
                            $data = array("sponsor_cart_id"=>$sponsor_cart_id, "sponsor_cart_status"=>$sponsor_cart_status);
                            Package::cartGameUpdate($data);

                            $start = explode(" ", $shopping->sponsor_cart_start);
                            $deadline = explode(" ", $shopping->sponsor_cart_deadline);
                            array_push($gameSpon, ([
                                'gameid' => $shopping->sponsor_cart_game,
                                'start' => $start[0].'T'.$start[1],
                                'deadline' => $deadline[0].'T'.$deadline[1]
                            ]));
                        }
                        
                        $data = array("transeection_invoice"=>$invoice, "transeection_status"=>"true", "transeection_gameSpon"=>$gameSpon);
                        Package::transeectionPaymentUpdate($data);

                        $dataDelete = array("transeection_type"=>$transeection->transeection_type, "USER_ID"=>$transeection->USER_ID);
                        Package::transeectionPaymentDelete($dataDelete);
                    }else{
                        $transeection_item = Transeection_buyItem::where('transeection_invoice', $invoice)->first();
                        if($transeection_item != null){

                            Transeection_buyItem::where('transeection_invoice', $invoice)->update(array('transeection_status' => "true"));

                            $transee = json_decode($transeection_item->transeection_items);
                            $itemlist = array();
                            $itemamount = array();
                            $shopping_id = array();

                            $i = 0;
                            foreach($transee as $transeeList){
                                $itemlist[] = $transeeList->item_id;
                                $itemamount[] = $transeeList->item_amount;
                                $shopping_id[] = $transeeList->shopping_id;
                            }
                            // dd($transee);
                            for($i=0;$i<count($transee);$i++){
                                $my_item = My_item::where([['item_id', $itemlist[$i]],['USER_EMAIL', $transeection_item->USER_EMAIL]])->first();
                                $item = Market_item::where('item_id', $itemlist[$i])->first();
                                if($my_item == null){
                                    // dd("yes");
                                    $my_item = new My_item();
                                    $my_item->my_item_name = $item->item_name;
                                    $my_item->my_item_img = $item->item_img;
                                    $my_item->my_item_gender = $item->item_gender;
                                    $my_item->my_item_type = $item->item_type;
                                    $my_item->my_item_other = $item->item_other;
                                    $my_item->my_item_description = $item->item_description;
                                    $my_item->my_item_level = $item->item_level;
                                    $my_item->my_item_amount = $itemamount[$i];
                                    $my_item->item_id = $item->item_id;
                                    $my_item->USER_ID = $transeection_item->USER_ID;
                                    $my_item->USER_EMAIL = $transeection_item->USER_EMAIL;
                                    $my_item->save();
                                }else{
                                    $my_item_amount = $my_item->my_item_amount + $itemamount[$i];
                                    My_item::where('item_id', $itemlist[$i])->update(array('my_item_amount' => $my_item_amount));
                                }
                                $sumamount = $item->item_amount_discount + $itemamount[$i];
                                Market_item::where('item_id', $item->item_id)->update(array('item_amount_discount' => $sumamount));
                                // $market->item_amount_discount = $itemamount[$i];
                                // $market->save();

                                DB::table('shopping_cart')->where('shopping_cart_id', $shopping_id[$i])->update(['shopping_cart_status'=>"true"]);

                                Transeection_buyItem::where([['transeection_type', $transeection_item->transeection_type], ['transeection_status', 'false'], ['USER_EMAIL', $transeection_item->USER_EMAIL]])->delete();

                            }
                        }
                    }
                    $qrpayment->save();
                }
            }
            return response()->json(['success'=>$qrpayment->invoice], 200);
        } else {
            return response()->json(['success'=>'empty'], 200);
        }
        
    }


    // public function callack($invoice)
    // {
    //     $register = $this->getToken();
    //     $token = $register->token;
    //     $headers = [
    //         'Content-Type' => 'application/json',
    //         'Authorization' => $token
    //     ];

    //     $client = new \GuzzleHttp\Client();

    //     $response = $client->request('POST', 'https://iot.finsense.co/device/received', [
    //         'headers' => $headers,
    //         'json' => [
    //         "qrType" => "qr30",
    //         "invoice" => $invoice
    //     ]
    //     ]);

    //     $response->getStatusCode(); # 200
    //     $response->getHeaderLine('content-type');
    //     $response->getBody();
    //     $contents = json_decode($response->getBody());

    //     return $contents;
    // }


    // public function getToken()
    // {

    //   $headers = [
    //     'Content-Type' => 'application/json',
    //   ];

    //   $client = new \GuzzleHttp\Client();
    //   $response = $client->request('POST', 'https://iot.finsense.co/device/register', [
    //       'headers' => $headers,
    //       'json' => [
    //         "companyName" => "SP INVESTOREST COMPANY LIMITED",
    //         "branchName" => "headoffice",
    //         "deviceName" => "Device-Multi"
    //     ]
    //   ]);

    //   $response->getStatusCode();
    //   $response->getHeaderLine('content-type');
    //   $response->getBody();
    //   $contents = json_decode($response->getBody());

    //   return $contents;
    // }
}
