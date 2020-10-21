<?php

namespace App\Http\Controllers\Topup;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Session;
use Auth;
use DB;

use App\Transeection_buyItem;
use App\CreditPayment;
use App\Market_item;
use App\My_item;

class creditPaymentController extends Controller
{
    public function visaCredit(Request $request){
        // dd($request);
        if($request->input('submit') != null){
            $transeection_type = $request->input('paymentType');
            $transeection_invoice =  "VISACREDIT".time().Auth::user()->id;
            $transeection_id = $request->input('transeection_id');
            
            $transeection = Transeection_buyItem::where('transeection_id', $transeection_id)->first();

            $credit_payments = new CreditPayment();
            $credit_payments->paymentType = $transeection_type;
            $credit_payments->amount = $transeection->transeection_price;
            $credit_payments->invoice = $transeection_invoice;
            $credit_payments->user_id = Auth::user()->id;
            $credit_payments->user_email = Auth::user()->email;
            $credit_payments->save();

            $total = number_format($transeection->transeection_price, 2, '', '');
            // dd("NO.1", $total, $transeection->transeection_price);
            if($transeection != null){
                Transeection_buyItem::where('transeection_id', $transeection_id)->update(array('transeection_type'=>$transeection_type, 'transeection_invoice'=>$transeection_invoice));
                
                $pay_type = 'PACA';
                $secure_key = '2MU3bSrnXhZ.UaMieWO8liyxrpWOQ3B-C8TR32xUs7e4A8wffY8V34FTHLL2eDvGMlyGGYENOCqUrKbkOqCleFkVHM6hDUeVwCBF-FUwcb4VNfgEzPU78owJGfGAuWp1M3H22tNyKc8ZbI7DuPHVXWsny65e50iGXnq.rTgZVIKPj1ue2E5d7q092FxxFkA0WzgIkkObV7knUnRHI5vPRxHCuVGlnj4qLIjVNsq2E5vvXETAUX.5SfwzaAj7H8CcnmLy8Kki5vv5fHzCnnezLQ0mJOAbI1UtDugPZUfFYGsxMRhmFXfMawErOZKlL-wLlSrYjQhwDDPvU-u1avfCglf__';
                $site_cd = 'A0001165MK';

                $hash_string  = $pay_type . $transeection_invoice . $total . $site_cd . $secure_key . Auth::user()->id;
                $hash_data = hash('sha256', $hash_string);

                $data["transeection_price"] = $transeection->transeection_price;
                $data["transeection_invoice"] = $transeection_invoice;
                $data["order_no"] = $transeection_invoice;
                $data["user_id"] = Auth::user()->id;
                // $data["ret_url"]="http://127.0.0.1:8000/payment/VisaCredit/callback";
                // $data["ret_url"]="/payment/VisaCredit/callback";
                $data["good_name"] = "ITEM";
                $data["trade_mony"] = $total;
                $data["currency"] = "764";
                $data["order_first_name"] = Auth::user()->name;
                $data["order_email"] = Auth::user()->email;
                $data["pay_type"] = $pay_type;
                $data["site_cd"] = $site_cd;
                $data["hash_data"] = $hash_data;

                return response()->json([
                    'order_no'=>$data["order_no"], 
                    // 'ret_url'=>$data["ret_url"], 
                    'user_id'=>$data["user_id"], 
                    'currency'=>$data["currency"],
                    'good_name'=>$data["good_name"], 
                    'trade_mony'=>$data["trade_mony"], 
                    'order_first_name'=>$data["order_first_name"], 
                    'order_email'=>$data["order_email"], 
                    'pay_type'=>$data["pay_type"], 
                    'site_cd'=>$data["site_cd"], 
                    'hash_data'=>$data["hash_data"],
                ]);
            }
        }
    }

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
            }
            Session::save();
            header("Location: ".url()->to(route('SuccessfulPayment', ['invoice' => encrypt($order_no)])));
            exit();
        }elseif($res_cd == "W999"){
            CreditPayment::where('invoice', $order_no)->update(array('status' => $res_cd, 'confirm_at' => date('Y-m-d H:i:s')));

            $transeection_item = Transeection_buyItem::where('transeection_invoice', $order_no)->first();
            if($transeection_item != null){
                Transeection_buyItem::where('transeection_invoice', $order_no)->update(array('transeection_type' => null, 'transeection_invoice' => null));
            }
            // dd($transeection_item);
            Session::save();
            header("Location: ".url()->to(route('Payment')));
            exit();
        }

        // dd(url()->to(route('AdsSpon')));
        Session::save();
        header("Location: ".url()->to(route('LEVELup')));
        exit();
    }
}
