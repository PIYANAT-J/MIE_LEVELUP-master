<?php

namespace App\Http\Controllers\Avatar;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use DB;
use Auth;
use DNS2D;

use App\QrPayment;
use App\Market_item;
use App\Transeection_buyItem;

class marketItemController extends Controller
{
    public function ShoppingCart(){
        $guest_user = DB::table('guest_users')->where('USER_EMAIL', Auth::user()->email)->get();
        $userKyc = DB::table('kycs')->where('USER_EMAIL', Auth::user()->email)->first();
        $shopping = DB::table('shopping_cart')->where([['shopping_cart.USER_EMAIL', Auth::user()->email], ['shopping_cart.shopping_cart_status', 'false']])
                        ->join('market_items', 'market_items.item_id', 'shopping_cart.item_id')
                        ->get();
        // dd($shopping);
        return view('avatar.shopItem.shopping_cart', compact('guest_user', 'userKyc', 'shopping'));
    }

    public function Shop(){
        $guest_user = DB::table('guest_users')->where('USER_EMAIL', Auth::user()->email)->get();
        $userKyc = DB::table('kycs')->where('USER_EMAIL', Auth::user()->email)->first();
        $shopping = DB::table('shopping_cart')->where([['USER_EMAIL', Auth::user()->email], ['shopping_cart_status', 'false']])->get();
        $marketItem = DB::table('market_items')
                        ->join('users', 'users.email', 'market_items.USER_EMAIL')
                        ->join('guest_users', 'guest_users.USER_EMAIL', 'users.email')
                        ->select('market_items.*', 'users.name', 'users.surname', 'guest_users.GUEST_USERS_IMG')
                        ->get();
        // dd($marketItem);
        return view('avatar.shopItem.shop', compact('guest_user', 'userKyc', 'shopping', 'marketItem'));
    }

    public function Payment(){
        $guest_user = DB::table('guest_users')->where('USER_EMAIL', Auth::user()->email)->get();
        $userKyc = DB::table('kycs')->where('USER_EMAIL', Auth::user()->email)->first();
        $address = DB::table('addresses')->where('USER_EMAIL', Auth::user()->email)->get();
        $shopping = DB::table('shopping_cart')->where([['shopping_cart.USER_EMAIL', Auth::user()->email], ['shopping_cart.shopping_cart_status', 'false']])
                        ->join('market_items', 'market_items.item_id', 'shopping_cart.item_id')
                        ->get();
        $transeection = DB::table('transeection_buy_items')->where([['USER_EMAIL', Auth::user()->email], ['transeection_status', 'false']])->orderBy('transeection_id', 'desc')->first();
        // dd(count($address));
        // dd(json_decode($transeection->transeection_items));
        if(count($address) != 0){
            return view('avatar.payment.payment', compact('guest_user', 'userKyc', 'shopping', 'transeection', 'address'));
        }
        return view('avatar.payment.payment', compact('guest_user', 'userKyc', 'shopping', 'transeection'));
    }

    public function add_ShoppingCart(Request $request){
        if($request->input('submit') != null){
            // dd($request);
            $shopping_cart_amount = $request->input('amountItem');
            $shopping_cart_price = $request->input('sumprice');
            $item_id = $request->input('item_id');

            $data = array("shopping_cart_amount"=>$shopping_cart_amount, "shopping_cart_price"=>$shopping_cart_price, "item_id"=>$item_id, 
                        "USER_ID"=>Auth::user()->id, "USER_EMAIL"=>Auth::user()->email);
            Market_item::shopping_cart($data);

            return back();
        }
    }

    public function ShoppingCartPayment(Request $request){
        if($request->input('submit') != null){
            $item_id = explode(", ", $request->input('itemList'));
            $item_price = explode(", ", $request->input('allTotal'));
            $item_amount = explode(", ", $request->input('allamount'));
            $shopping_id = explode(", ", $request->input('allshopp'));

            $itemsList = [];
            for($i=0;$i<$request->input('countChecked');$i++){
                array_push($itemsList, ([
                    'item_id' => $item_id[$i],
                    'item_amount' => $item_amount[$i],
                    'item_price' => $item_price[$i],
                    'shopping_id' => $shopping_id[$i]
                ]));
            }

            $transeection = new Transeection_buyItem();
            $transeection->transeection_price = $request->input('sumTotal');
            $transeection->transeection_items = json_encode($itemsList);
            $transeection->USER_ID = Auth::user()->id;
            $transeection->USER_EMAIL = Auth::user()->email;
            $transeection->save();

            return redirect(route('Payment'));
        }
    }

    public function paymentConfirmation($invoice = null){
        $guest_user = DB::table('guest_users')->where('USER_EMAIL', Auth::user()->email)->get();
        $userKyc = DB::table('kycs')->where('USER_EMAIL', Auth::user()->email)->first();
        $shopping = DB::table('shopping_cart')->where([['USER_EMAIL', Auth::user()->email], ['shopping_cart_status', 'false']])->get();
        $transeection = DB::table('transeection_buy_items')->where('transeection_invoice', decrypt($invoice))->first();
        // dd($transeection);
        $qrpayment = QrPayment::Where('invoice', decrypt($invoice))->get()->first();
        $invoice =  DNS2D::getBarcodeHTML($qrpayment->rawQrCode, "QRCODE");
        $invoice = $qrpayment->rawQrCode;
        return view('avatar.payment.payment_confirmation', compact('guest_user', 'userKyc', 'shopping', 'invoice', 'transeection', 'qrpayment'));
    }

    public function itemibanking(Request $request){
        // dd($request);
        $qrpayment = new QrPayment();
        $qrpayment->user_id = Auth::user()->id;
        $qrpayment->user_email = Auth::user()->email;
        $qrpayment->qrType = "qr30";
        $qrpayment->paymentType = $request->paymentType;
        $qrpayment->amount = $request->amount;
        $qrpayment->note = $request->note;
        $qrpayment->qr_invoice = time().Auth::user()->id;
        $qrpayment->bank_name = $request->bank_name;
        $qrpayment->blockchain = "###TOPUP-LEVELup###";
        $qrpayment->save();

        $qrcode = $this->getQrcode($qrpayment->amount, $qrpayment->note );
        
        $qrpayment = QrPayment::find($qrpayment->id);
        $qrpayment->rawQrCode = $qrcode->rawQrCode;
        $qrpayment->invoice = $qrcode->invoice;
        $qrpayment->save();

        $transeection = DB::table('transeection_buy_items')->where([['transeection_id', $request->input('transeection_id')]])->first();
        $transeection_invoice = $qrcode->invoice;
        $transeection_type = "qr";

        // $transeection = Transeection_buyItem::where('transeection_id', $request->input('transeection_id'));
        // $transeection->transeection_invoice = $qrcode->invoice;
        // $transeection->transeection_type = "qr";
        // $transeection->save();

        $data = array("transeection_id"=>$request->input('transeection_id'), "transeection_invoice"=>$transeection_invoice, "transeection_type"=>$transeection_type);
        Transeection_buyItem::cartPaymentUpdate($data);

        return redirect(route('PaymentConfirmation', ['invoice' => encrypt($qrpayment->invoice)]));
    }

    public function getQrcode($amount = null, $note = null){
        $headers = [
            'Content-Type' => 'application/json',
            ];
    
        $client = new \GuzzleHttp\Client();
        $response = $client->request('POST', 'https://www.t10assets.com/api/v1/ecommerce/payment/qrcode', [
            'headers' => $headers,
            'json' => [
                "token" => 'ca6a3833956454fbfdc1f887ea9676d7',
                "amount" => $amount,
                "note" => $note,
            ]
        ]);

        $http_status_code = $response->getStatusCode();
        $response->getHeaderLine('content-type');
        $response->getBody();
        $contents = json_decode($response->getBody());
        return ($http_status_code == 200)? $contents:'';
    }

    public function cancalibanking_item(Request $request){
        // dd($request);
        if($request->input('submit') != null){
            $qrpayment = QrPayment::Where('invoice', $request->input('invoice'))->get()->first();
            if($qrpayment->status == "false"){
                return back()->with("false", "กรุณากดปุ่มยืนยันอีกครั้ง");
            }
            return redirect(route('SuccessfulPayment', ['invoice' => encrypt($request->input('invoice'))]));
        }else{
            $qrpayment = QrPayment::Where('invoice', $request->input('invoice'))->get()->first();
            $qrpayment->status = "99";
            $qrpayment->save();

            // if($request->input('package_id') != null){
            //     $data = $request->input('invoice');
                // Package::deletePackage($data);

            //     return redirect(route('AdvtPackage'));
            // }else{
            $data = $request->input('invoice');
            DB::table('transeection_buy_items')->where('transeection_invoice', $data)->delete();

            return redirect(route('ShoppingCart'));
            // }
        }
    }

    public function successfulPayment(){
        $guest_user = DB::table('guest_users')->where('USER_EMAIL', Auth::user()->email)->get();
        $userKyc = DB::table('kycs')->where('USER_EMAIL', Auth::user()->email)->first();
        $shopping = DB::table('shopping_cart')->where('USER_EMAIL', Auth::user()->email)->get();
        return view('avatar.payment.successful_payment', compact('guest_user', 'userKyc', 'shopping'));
    }
}
