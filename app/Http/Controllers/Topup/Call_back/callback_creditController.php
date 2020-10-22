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
        // Session::save();
        // header("Location: ".url()->to(route('LEVELup')));
        // exit();
    }
}
