<?php

namespace App\Http\Controllers\Topup\Call_back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Session;
use Auth;
use DB;

use App\Transeection_buyItem;
use App\CreditPayment;
use App\Market_item;
use App\My_item;
use App\Package;

class callback_creditController extends Controller
{
    public function visaCreditCallback(Request $request){
        // dd($request);
        $res_cd = $request->res_cd;
        $order_no = $request->order_no;
        if($res_cd == "0000"){
            $y = substr($request->trade_ymd, 0, 4);
            $mm = substr($request->trade_ymd, 4, 2);
            $d = substr($request->trade_ymd, 6, 2);
            $h = substr($request->trade_hms, 0, 2);
            $m = substr($request->trade_hms, 2, 2);
            $s = substr($request->trade_hms, 4, 2);
            $confirm_at = $y.'-'.$mm.'-'.$d.' '.$h.':'.$m.':'.$d;
            // dd($confirm_at);
            CreditPayment::where('invoice', $order_no)->update(array('credit_card' => $request->card_no, 'tno' => $request->tno, 'status' => "true", 'confirm_at' => $confirm_at));

            $transeection_item = Transeection_buyItem::where('transeection_invoice', $order_no)->first();
            if($transeection_item != null){

                Transeection_buyItem::where('transeection_invoice', $order_no)->update(array('transeection_status' => "true"));

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
                for($i=0;$i<count($transee);$i++){
                    $my_item = My_item::where([['item_id', $itemlist[$i]],['USER_EMAIL', $transeection_item->USER_EMAIL]])->first();
                    $item = Market_item::where('item_id', $itemlist[$i])->first();
                    if($my_item == null){
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

                    DB::table('shopping_cart')->where('shopping_cart_id', $shopping_id[$i])->update(['shopping_cart_status'=>"true"]);

                    Transeection_buyItem::where([['transeection_type', $transeection_item->transeection_type], ['transeection_status', 'false'], ['USER_EMAIL', $transeection_item->USER_EMAIL]])->delete();
                }
                Session::save();
                header("Location: ".url()->to(route('SuccessfulPayment', ['invoice' => encrypt($order_no)])));
                exit();
            }else{
                $type = CreditPayment::where('invoice', $order_no)->first();
                if($type->useType == "wallet"){
                    Session::save();
                    header("Location: ".url()->to(route('UserTopup')));
                    exit();
                }elseif($type->useType == "package"){
                    $transeection = DB::table('transeection_sponshopping')->where('transeection_invoice', $order_no)->first();
                    if($transeection != null){
                        $packageBuy = DB::table('my_package_buy')->where('packageBuy_invoice', $order_no)->first();
                        if($packageBuy != null){
                            $package = DB::table('packages')->where('package_id', $packageBuy->package_id)->first();
                            $packageBuy_status = "true";
                            $packageBuy_start = date('Y-m-d');
                            $Y = date('Y');
                            $m = date('m')+$package->package_season;
                            $d = date('d');
                            $packageBuy_deadline = $Y.'-'.$m.'-'.$d;

                            $data = array("packageBuy_status"=>$packageBuy_status, "packageBuy_start"=>$packageBuy_start, "packageBuy_deadline"=>$packageBuy_deadline, "packageBuy_invoice"=>$order_no);
                            $value = Package::packageBuy($data);

                            DB::table('transeection_sponshopping')->where('transeection_invoice', $order_no)->update(array("transeection_status"=>"true"));

                        }else{
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
                            
                            $data = array("transeection_invoice"=>$order_no, "transeection_status"=>"true", "transeection_gameSpon"=>$gameSpon);
                            Package::transeectionPaymentUpdate($data);
                        }

                        $dataDelete = array("transeection_type"=>$transeection->transeection_type, "USER_ID"=>$transeection->USER_ID);
                        Package::transeectionPaymentDelete($dataDelete);
                    }
                    Session::save();
                    header("Location: ".url()->to(route('SponsorSuccessfulPayment', ['invoice' => encrypt($order_no)])));
                    exit();
                }
            }
        }elseif($res_cd == "W999"){

            CreditPayment::where('invoice', $order_no)->update(array('status' => $res_cd, 'confirm_at' => date('Y-m-d H:i:s')));

            $transeection_item = Transeection_buyItem::where('transeection_invoice', $order_no)->first();
            if($transeection_item != null){
                Transeection_buyItem::where('transeection_invoice', $order_no)->update(array('transeection_type' => null, 'transeection_invoice' => null));

                Session::save();
                header("Location: ".url()->to(route('Payment')));
                exit();
            }else{
                $type = CreditPayment::where('invoice', $order_no)->first();
                if($type->useType == "wallet"){
                    Session::save();
                    header("Location: ".url()->to(route('UserTopup')));
                    exit();
                }elseif($type->useType == "package"){
                    $packge = DB::table('my_package_buy')->where('packageBuy_invoice', $order_no)->first();
                    if($packge != null){
                        DB::table('transeection_sponshopping')->where('transeection_invoice', $order_no)->update(array('transeection_invoice'=>null, 'transeection_type'=>null));

                        Session::save();
                        header("Location: ".url()->to(route('packagePay', ['id' => encrypt($packge->package_id), 'idT'=>encrypt('null')])));

                        DB::table('my_package_buy')->where('packageBuy_id', $packge->packageBuy_id)->delete();
                        exit();
                    }else{
                        DB::table('transeection_sponshopping')->where('transeection_invoice', $order_no)->update(array('transeection_invoice'=>null, 'transeection_type'=>null));

                        Session::save();
                        header("Location: ".url()->to(route('packagePay', ['id'=>encrypt('list'), 'idT'=>encrypt('null')])));
                        exit();
                    }
                }
            }
        }
    }
}
