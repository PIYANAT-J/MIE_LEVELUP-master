<?php

namespace App\Http\Controllers\Topup;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Auth;
use DB;

use App\Transeection_buyItem;

class creditPaymentController extends Controller
{
    public function visaCredit($transeection_id){
        // dd($request);
        if($request->input('submit') != null){
            $transeection_type = $request->input('paymentType');
            $transeection_invoice =  $transeection_type.time().Auth::user()->id;
            $transeection_id = $request->input('transeection_id');
            
            $transeection = Transeection_buyItem::where('transeection_id', $transeection_id)->first();

            $total = number_format($transeection->transeection_price, 2);
            // dd("NO.1", $total, $transeection->transeection_price);
            if($transeection != null){
                // Transeection_buyItem::where('transeection_id', $transeection_id)->update(array('transeection_type'=>$transeection_type, 'transeection_invoice'=>$transeection_invoice));
                
                $pay_type = 'PACA';
                $secure_key = '2MU3bSrnXhZ.UaMieWO8liyxrpWOQ3B-C8TR32xUs7e4A8wffY8V34FTHLL2eDvGMlyGGYENOCqUrKbkOqCleFkVHM6hDUeVwCBF-FUwcb4VNfgEzPU78owJGfGAuWp1M3H22tNyKc8ZbI7DuPHVXWsny65e50iGXnq.rTgZVIKPj1ue2E5d7q092FxxFkA0WzgIkkObV7knUnRHI5vPRxHCuVGlnj4qLIjVNsq2E5vvXETAUX.5SfwzaAj7H8CcnmLy8Kki5vv5fHzCnnezLQ0mJOAbI1UtDugPZUfFYGsxMRhmFXfMawErOZKlL-wLlSrYjQhwDDPvU-u1avfCglf__';
                $site_cd = 'A0001165MK';

                $hash_string  = $pay_type . $transeection_invoice . $total . $site_cd . $secure_key . Auth::user()->id;
                $hash_data = hash('sha256', $hash_string);

                $data["transeection_price"] = $transeection->transeection_price;
                $data["transeection_invoice"] = $transeection_invoice;
                $data["order_no"] = $transeection_invoice;
                $data["user_id"] = Auth::user()->id;
                $data["ret_url"]="http://127.0.0.1:8000/payment/VisaCredit/callback";
                $data["good_name"] = "ITEM";
                $data["trade_mony"] = $total;
                $data["currency"] = "764";
                $data["order_first_name"] = Auth::user()->name;
                $data["order_email"] = Auth::user()->email;
                $data["pay_type"] = $pay_type;
                $data["site_cd"] = $site_cd;
                $data["hash_data"] = $hash_data;

                // $headers = [
                //     'Content-Type' => 'text/html',
                // ];
            
                // $client = new \GuzzleHttp\Client();
                // $response = $client->request('POST', 'https://paytest.treepay.co.th/total/hubInit.tp', [
                //     'headers' => $headers,
                //     'order_no'=>$data["order_no"], 
                //     'ret_url'=>$data["ret_url"], 
                //     'user_id'=>$data["user_id"], 
                //     'currency'=>$data["currency"],
                //     'good_name'=>$data["good_name"], 
                //     'trade_mony'=>$data["trade_mony"], 
                //     'order_first_name'=>$data["order_first_name"], 
                //     'order_email'=>$data["order_email"], 
                //     'pay_type'=>$data["pay_type"], 
                //     'site_cd'=>$data["site_cd"], 
                //     'hash_data'=>$data["hash_data"], 
                // ]);

                // return redirect()->to("https://paytest.treepay.co.th/total/hubInit.tp");
                // dd($response);
                // return response()->json([
                //     'transeection_price'=>$data["transeection_price"], 
                //     'transeection_invoice'=>$data["transeection_invoice"], 
                //     'user_id'=>$data["user_id"], 
                //     'good_name'=>$data["good_name"], 
                //     'trade_mony'=>$data["trade_mony"], 
                //     'order_first_name'=>$data["order_first_name"], 
                //     'order_email'=>$data["order_email"], 
                //     'pay_type'=>$data["pay_type"], 
                //     'site_cd'=>$data["site_cd"], 
                //     'hash_data'=>$data["hash_data"], 
                //     'action'=>'https://paytest.treepay.co.th/total/hubInit.tp'
                // ]);
            }
            // dd("NO");
        }
        return view('avatar.payment.payment_credit', compact('data'));
    }

    // public function treepay($data = null){
    //     dd($data);
    //     return view('avatar.payment.payment_credit', compact('data'));
    // }

    public function visaCreditCallback(Request $request){
        dd($request);
        // return view('pages.product-payment-credit', $data);
    }
}
