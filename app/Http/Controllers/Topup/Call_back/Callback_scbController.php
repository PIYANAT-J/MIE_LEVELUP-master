<?php

namespace App\Http\Controllers\Topup\Call_back;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

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
        // dd(['empty']);
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
                // $qrpayment->client_ip = request()->ip();
                $qrpayment->confirm_at = date('Y-m-d H:i:s');

                $packageBuy = DB::table('my_package_buy')->where('packageBuy_invoice', $invoice)->first();
                
                // dd($packageBuy);
                if ($packageBuy != null) {
                    // dd("NO");
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
                }else {
                    // dd("YES");
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
                        // dd($data);
                        Package::transeectionPaymentUpdate($data);
                        
                    }
                    $data = array("transeection_type"=>$transeection->transeection_type, "USER_ID"=>$transeection->USER_ID);
                    Package::transeectionPaymentDelete($data);
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
