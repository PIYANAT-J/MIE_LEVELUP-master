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
use App\transferPayment;
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
        // dd($transeection);
        // dd(json_decode($transeection->transeection_items));
        if(count($address) != 0){
            if($transeection->transeection_invoice != null){
                $transfer = DB::table('transfer_payments')->where('transferInvoice', $transeection->transeection_invoice)->first();
                return view('avatar.payment.payment', compact('guest_user', 'userKyc', 'shopping', 'transeection', 'address', 'transfer'));
            }
            return view('avatar.payment.payment', compact('guest_user', 'userKyc', 'shopping', 'transeection', 'address'));
        }
        return view('avatar.payment.payment', compact('guest_user', 'userKyc', 'shopping', 'transeection'));
    }

    public function add_ShoppingCart(Request $request){
        if($request->input('submit') != null){
            $item_id = $request->input('item_id');
            $shopping = DB::table('shopping_cart')->where([['USER_EMAIL', Auth::user()->email], ['shopping_cart_status', 'false'], ['item_id', $item_id]])->first();
            
            if($shopping == null){
                $shopping_cart_amount = $request->input('amountItem');
                $shopping_cart_price = $request->input('sumprice');

                $data = array("shopping_cart_amount"=>$shopping_cart_amount, "shopping_cart_price"=>$shopping_cart_price, "item_id"=>$item_id, 
                            "USER_ID"=>Auth::user()->id, "USER_EMAIL"=>Auth::user()->email);
                Market_item::shopping_cart($data);
            }else{
                $amount = $shopping->shopping_cart_amount + $request->input('amountItem');
                $sumprice = $shopping->shopping_cart_price + $request->input('sumprice');
                DB::table('shopping_cart')->where('shopping_cart_id', $shopping->shopping_cart_id)->update(array("shopping_cart_amount"=>$amount, "shopping_cart_price"=>$sumprice));
            }
            $countShop = DB::table('shopping_cart')->where([['USER_EMAIL', Auth::user()->email], ['shopping_cart_status', 'false']])->get();
            return response()->json(['count'=>count($countShop), 'success'=>'เพิ่มลงตระกร้าแล้ว'], 200);
            // return back();
        }elseif($request->input('Delete') != null){
            DB::table('shopping_cart')->where('shopping_cart_id', $request->input('shopping_cart_id'))->delete();
            $countShop = DB::table('shopping_cart')->where([['USER_EMAIL', Auth::user()->email], ['shopping_cart_status', 'false']])->get();
            return response()->json(['count'=>count($countShop), 'delete'=>'ลบเรียบร้อยแล้ว'], 200);
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
                // return back()->with("false", "กรุณากดปุ่มยืนยันอีกครั้ง");
                return response()->json(['false'=>'กรุณากดปุ่มยืนยันอีกครั้ง'], 200);
            }
            return response()->json(['success'=>'กรุณากดปุ่มยืนยันอีกครั้ง', 'route'=>'/successful_payment/'.encrypt($request->input("invoice")).''], 200);
            // return redirect(route('SuccessfulPayment', ['invoice' => encrypt($request->input('invoice'))]));
        }else{
            $qrpayment = QrPayment::Where('invoice', $request->input('invoice'))->get()->first();
            $qrpayment->status = "99";
            $qrpayment->save();

            $data = $request->input('invoice');
            DB::table('transeection_buy_items')->where('transeection_invoice', $data)->delete();

            return redirect(route('ShoppingCart'));
        }
        return response()->json(['success'=>$request->input('submit')], 200);
    }

    public function successfulPayment($invoice = null){
        $guest_user = DB::table('guest_users')->where('USER_EMAIL', Auth::user()->email)->get();
        $userKyc = DB::table('kycs')->where('USER_EMAIL', Auth::user()->email)->first();
        $address = DB::table('addresses')->where('USER_EMAIL', Auth::user()->email)->get();
        $shopping = DB::table('shopping_cart')->where([['USER_EMAIL', Auth::user()->email], ['shopping_cart_status', 'false']])->get();
        $transeection = DB::table('transeection_buy_items')->where([['transeection_invoice', decrypt($invoice)], ['transeection_status', 'true']])->first();
        // $transeection = DB::table('transeection_buy_items')->where([['USER_EMAIL', Auth::user()->email], ['transeection_status', 'true']])->orderBy('transeection_id', 'desc')->first();
        $marketItem = Market_item::all();
        
        if(count($address) != 0){
            return view('avatar.payment.successful_payment', compact('guest_user', 'userKyc', 'shopping', 'transeection', 'address', 'invoice', 'marketItem'));
        }
        return view('avatar.payment.successful_payment', compact('guest_user', 'userKyc', 'shopping', 'transeection', 'invoice', 'marketItem'));
    }

    public function itemTransferPayment(Request $req){
        if($req->input('submit') != null){
            // dd($req);
            if($req->has('transferImg')){
                // dd("อีกนิสเดียว");
                $uploadImg = $req->file('transferImg');
                $img_name = 'Transfer_Img_'.time().'.'.$uploadImg->getClientOriginalExtension();
                $pathImg = public_path('section/Transfer_Img');
                $uploadImg->move($pathImg, $img_name);

                $transferNote = $req->input('transferNote');
                $transferStatus = "รอการอนุมัติ";
                $transferImg = $img_name;
                $user_id = Auth::user()->id;
                $user_email = Auth::user()->email;
                $id = $req->input('id');
                $update_at = $req->input('date').' '.$req->input('time');
                // $update_at = date('Y-m-d H:i:s');
                // dd($update_at);
                $package_id = $req->input('package_id');

                if($transferImg != "" && $transferStatus != "" && $id != ""){
                    $data = array("transferNote"=>$transferNote, "transferStatus"=>$transferStatus, "transferImg"=>$transferImg, "user_id"=>$user_id, 
                                "user_email"=>$user_email, "id"=>$id, "update_at"=>$update_at);
                    
                    transferPayment::updateTransfer($data);
                }
                return redirect(route('Payment'));

            }else{
                // dd($req);
                $transferAmount = $req->input('transferAmount');
                $transferฺBank_name = $req->input('transferฺBank_name');
                $transferStatus = "ยืนยันการโอน";
                $user_id = Auth::user()->id;
                $user_email = Auth::user()->email;

                $i = DB::table('transfer_payments')->select(DB::raw('count(*) as i'))
                        ->where('user_id', $user_id)
                        ->groupBy('user_id')
                        ->value('i');
                $sumi = $i+1;
                $invoice = $transferฺBank_name.$sumi;
                if($transferฺBank_name == "bangkok"){
                    $transferInvoice = "BBL".time().$user_id;
                }elseif($transferฺBank_name == "ktc"){
                    $transferInvoice = "KTC".time().$user_id;
                }elseif($transferฺBank_name == "kbank"){
                    $transferInvoice = "KBANK".time().$user_id;
                }elseif($transferฺBank_name == "scb"){
                    $transferInvoice = "SCB".time().$user_id;
                }
                $create_at = date('Y-m-d H:i:s');

                if($transferAmount != "" && $transferฺBank_name != ""){
                    $data = array("transferAmount"=>$transferAmount, "transferฺBank_name"=>$transferฺBank_name, "transferStatus"=>$transferStatus, 
                                "user_id"=>$user_id, "user_email"=>$user_email, "invoice"=>$invoice, "transferInvoice"=>$transferInvoice, "create_at"=>$create_at);
                    // dd($data);
                    transferPayment::insertTransfer($data);
                }

                $transeection = DB::table('transeection_buy_items')->where([['transeection_id', $req->input('transeection_id')]])->first();
                $transeection_invoice = $transferInvoice;
                $transeection_type = "Transfer";

                $data = array("transeection_id"=>$req->input('transeection_id'), "transeection_invoice"=>$transeection_invoice, "transeection_type"=>$transeection_type);
                Transeection_buyItem::cartPaymentUpdate($data);

                return redirect(route('PaymentTransfer', ['invoice' => encrypt($transferInvoice)]));
            }
        }
    }

    public function paymentTransfer($invoice = null){
        $guest_user = DB::table('guest_users')->where('USER_EMAIL', Auth::user()->email)->get();
        $userKyc = DB::table('kycs')->where('USER_EMAIL', Auth::user()->email)->first();
        $shopping = DB::table('shopping_cart')->where([['USER_EMAIL', Auth::user()->email], ['shopping_cart_status', 'false']])->get();
        $transfer = DB::table('transfer_payments')->where('transferInvoice', decrypt($invoice))->first();
        $transeection = DB::table('transeection_buy_items')->where('transeection_invoice', decrypt($invoice))->first();
        return view('avatar.payment.payment_transfer', compact('guest_user', 'userKyc', 'shopping', 'transeection', 'transfer'));
    }
}
