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
            $credit_payments->useType = "item";
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

    public function topupCredit(Request $request){

        $invoice = "VISACREDIT".time().Auth::user()->id;

        $credit_payments = new CreditPayment();
        $credit_payments->paymentType = "VisaCredit";
        $credit_payments->useType = "wallet";
        $credit_payments->amount = $request->input('creditAmount');
        $credit_payments->invoice = $invoice;
        $credit_payments->user_id = Auth::user()->id;
        $credit_payments->user_email = Auth::user()->email;
        $credit_payments->save();

        $total = number_format($request->input('creditAmount'), 2, '', '');

        $pay_type = 'PACA';
        $secure_key = '2MU3bSrnXhZ.UaMieWO8liyxrpWOQ3B-C8TR32xUs7e4A8wffY8V34FTHLL2eDvGMlyGGYENOCqUrKbkOqCleFkVHM6hDUeVwCBF-FUwcb4VNfgEzPU78owJGfGAuWp1M3H22tNyKc8ZbI7DuPHVXWsny65e50iGXnq.rTgZVIKPj1ue2E5d7q092FxxFkA0WzgIkkObV7knUnRHI5vPRxHCuVGlnj4qLIjVNsq2E5vvXETAUX.5SfwzaAj7H8CcnmLy8Kki5vv5fHzCnnezLQ0mJOAbI1UtDugPZUfFYGsxMRhmFXfMawErOZKlL-wLlSrYjQhwDDPvU-u1avfCglf__';
        $site_cd = 'A0001165MK';

        $hash_string  = $pay_type . $invoice . $total . $site_cd . $secure_key . Auth::user()->id;
        $hash_data = hash('sha256', $hash_string);

        // $data["transeection_price"] = $transeection->transeection_price;
        // $data["transeection_invoice"] = $transeection_invoice;
        $data["order_no"] = $invoice;
        $data["user_id"] = Auth::user()->id;
        $data["good_name"] = "wallet";
        $data["trade_mony"] = $total;
        $data["currency"] = "764";
        $data["order_first_name"] = Auth::user()->name;
        $data["order_email"] = Auth::user()->email;
        $data["pay_type"] = $pay_type;
        $data["site_cd"] = $site_cd;
        $data["hash_data"] = $hash_data;

        return response()->json([
            'order_no'=>$data["order_no"], 
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
