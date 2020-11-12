<?php

namespace App\Http\Controllers\Sponsor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

use DB;
use Auth;

use App\CreditPayment;
use App\TransferPayment;
use App\QrPayment;
use App\Package;
use DNS2D;

class packageController extends Controller
{
    public function AdvtPackage(){
        $cout = DB::table('my_package_buy')->where('USER_EMAIL', Auth::user()->email)->get();
        if($cout->count() == 0){
            $sponsor = DB::table('sponsors')->where('USER_EMAIL', Auth::user()->email)->get();
            $allPackage = DB::table('packages')->get();
            $countCart = DB::table('sponsor_shopping_cart')->where([['sponsor_shopping_cart.USER_ID', Auth::user()->id], ['sponsor_shopping_cart.sponsor_cart_status', 'false']])
                            ->join('games', 'games.GAME_ID', 'sponsor_shopping_cart.sponsor_cart_game')
                            ->select('sponsor_shopping_cart.*', 'games.GAME_NAME', 'games.RATED_B_L', 'games.GAME_DISCOUNT', 'games.GAME_IMG_PROFILE')
                            ->get();
            // dd($allPackage);
            return view('profile.sponsor.advt_package', compact('sponsor', 'allPackage', 'countCart'));
        }else{
            $sponsor = DB::table('sponsors')->where('USER_EMAIL', Auth::user()->email)->get();
            $package = DB::table('my_package_buy')->where('USER_EMAIL', Auth::user()->email)->get();
            $allPackage = DB::table('packages')->get();
            $countCart = DB::table('sponsor_shopping_cart')->where([['sponsor_shopping_cart.USER_ID', Auth::user()->id], ['sponsor_shopping_cart.sponsor_cart_status', 'false']])
                            ->join('games', 'games.GAME_ID', 'sponsor_shopping_cart.sponsor_cart_game')
                            ->select('sponsor_shopping_cart.*', 'games.GAME_NAME', 'games.RATED_B_L', 'games.GAME_DISCOUNT', 'games.GAME_IMG_PROFILE')
                            ->get();
            return view('profile.sponsor.advt_package', compact('sponsor', 'package', 'allPackage', 'countCart'));
        }
    }

    public function packagePay($id, $idT){
        // dd(decrypt($id),decrypt($idT));
        $sponsor = DB::table('sponsors')->where('USER_EMAIL', Auth::user()->email)->get();
        $address = DB::table('addresses')->where('USER_EMAIL', Auth::user()->email)->get();
        $countCart = DB::table('sponsor_shopping_cart')->where([['sponsor_shopping_cart.USER_ID', Auth::user()->id], ['sponsor_shopping_cart.sponsor_cart_status', 'false']])
                            ->join('games', 'games.GAME_ID', 'sponsor_shopping_cart.sponsor_cart_game')
                            ->select('sponsor_shopping_cart.*', 'games.GAME_NAME', 'games.RATED_B_L', 'games.GAME_DISCOUNT', 'games.GAME_IMG_PROFILE')
                            ->get();
        if(decrypt($id) == "list"){
            // dd($countCart);
            $transeection = DB::table('transeection_sponshopping')->where([['USER_ID', Auth::user()->id], ['transeection_status', 'false']])
                                ->orderBy('transeection_id', 'desc')
                                ->first();
            return view('profile.sponsor.spon_payment', compact('sponsor', 'address', 'countCart', 'transeection'));
        }else{
            $allPackage = DB::table('packages')->where('package_id', decrypt($id))->first();
            $package = DB::table('my_package_buy')->where([['package_id', decrypt($id)], ['USER_EMAIL', Auth::user()->email]])->first();
            if($package != null){
                $transfer = DB::table('transfer_payments')->where('transferInvoice', $package->packageBuy_invoice)->first();
                return view('profile.sponsor.spon_payment', compact('sponsor', 'allPackage', 'package', 'transfer', 'address', 'countCart'));
            }else{
                // dd(decrypt($idT));
                if(decrypt($idT) != "null"){
                    $transeection = DB::table('transeection_sponshopping')->where([['transeection_id', decrypt($idT)]])->first();
                    $transfer = DB::table('transfer_payments')->where('transferInvoice', $transeection->transeection_invoice)->first();
                    return view('profile.sponsor.spon_payment', compact('sponsor', 'allPackage', 'package', 'address', 'countCart', 'transeection', 'transfer'));
                }
                    
                // dd($transeection);
                return view('profile.sponsor.spon_payment', compact('sponsor', 'allPackage', 'package', 'address', 'countCart'));
            }
        }
    }

    public function AdvtManagement($id){
        $sponsor = DB::table('sponsors')->where('USER_EMAIL', Auth::user()->email)->get();
        $package = DB::table('my_package_buy')->where([['my_package_buy.package_id', decrypt($id)], ['my_package_buy.USER_EMAIL', Auth::user()->email]])
                        ->join('packages','packages.package_id','my_package_buy.package_id')
                        ->select('my_package_buy.*', 'packages.package_game', 'packages.package_length')
                        ->first();
        $game = DB::table('games')->where('GAME_STATUS','อนุมัติ')->get();
        $packageGame = json_decode($package->packageBuy_gameSpon);
        $countCart = DB::table('sponsor_shopping_cart')->where([['sponsor_shopping_cart.USER_ID', Auth::user()->id], ['sponsor_shopping_cart.sponsor_cart_status', 'false']])
                            ->join('games', 'games.GAME_ID', 'sponsor_shopping_cart.sponsor_cart_game')
                            ->select('sponsor_shopping_cart.*', 'games.GAME_NAME', 'games.RATED_B_L', 'games.GAME_DISCOUNT', 'games.GAME_IMG_PROFILE')
                            ->get();
        // dd($packageGame);
        return view('profile.sponsor.advt_management', compact('sponsor', 'package', 'packageGame', 'game', 'countCart'));
    }

    // PackagePaymentBySponsor
    public function sponsoribanking($invoice = null){
        // dd($invoice);
        $sponsor = DB::table('sponsors')->where('USER_EMAIL', Auth::user()->email)->get();
        $package = DB::table('my_package_buy')->where('packageBuy_invoice', decrypt($invoice))->first();
        $countCart = DB::table('sponsor_shopping_cart')->where([['sponsor_shopping_cart.USER_ID', Auth::user()->id], ['sponsor_shopping_cart.sponsor_cart_status', 'false']])
                            ->join('games', 'games.GAME_ID', 'sponsor_shopping_cart.sponsor_cart_game')
                            ->select('sponsor_shopping_cart.*', 'games.GAME_NAME', 'games.RATED_B_L', 'games.GAME_DISCOUNT', 'games.GAME_IMG_PROFILE')
                            ->get();
        $transeection = DB::table('transeection_sponshopping')->where('transeection_invoice', decrypt($invoice))->first();
        // dd($transeection);
        $qrpayment = QrPayment::Where('invoice', decrypt($invoice))->get()->first();
        $invoice =  DNS2D::getBarcodeHTML($qrpayment->rawQrCode, "QRCODE");
        $invoice = $qrpayment->rawQrCode;
        
        return view('profile.sponsor.spon_payment_ibanking_confirm', compact('sponsor', 'invoice', 'qrpayment', 'package', 'countCart', 'transeection'));
    }

    public function packageibanking(Request $request){
        // dd($request);
        $qrpayment = new QrPayment();
        $qrpayment->user_id = Auth::user()->id;
        $qrpayment->user_email = Auth::user()->email;
        $qrpayment->useType = "package";
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

        if($request->input('package_id') != null){
            $allpackage = DB::table('packages')->where('package_id',$request->input('package_id'))->first();
            $packageBuy_name = $allpackage->package_name;
            $packageBuy_amount = $allpackage->package_amount;
            $packageBuy_season = $allpackage->package_season;
            $packageBuy_invoice = $qrcode->invoice;
            $package_id = $allpackage->package_id;
            $USER_ID = Auth::user()->id;
            $USER_EMAIL = Auth::user()->email;
    
            $data = array("packageBuy_name"=>$packageBuy_name, "packageBuy_invoice"=>$packageBuy_invoice, "package_id"=>$package_id, 
                    "packageBuy_amount"=>$packageBuy_amount, "packageBuy_season"=>$packageBuy_season,"USER_ID"=>$USER_ID, "USER_EMAIL"=>$USER_EMAIL);
            $value = Package::packageBuy($data);

            DB::table('transeection_sponshopping')->insert(array("transeection_amount"=>$packageBuy_amount, "transeection_type"=>"qr", "transeection_invoice"=>$packageBuy_invoice,
                "USER_ID"=>$USER_ID, "USER_EMAIL"=>$USER_EMAIL));
    
            return redirect(route('Sponsoribanking', ['invoice' => encrypt($qrpayment->invoice)]));
        }else{
            $transeection = DB::table('transeection_sponshopping')->where([['transeection_id', $request->input('transeection_id')]])->first();
            $transeection_invoice = $qrcode->invoice;
            $transeection_type = "qr";

            $data = array("transeection_id"=>$request->input('transeection_id'), "transeection_invoice"=>$transeection_invoice, "transeection_type"=>$transeection_type);
            Package::cartPaymentUpdate($data);
            return redirect(route('Sponsoribanking', ['invoice' => encrypt($qrpayment->invoice)]));
        }
        
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

    public function cancalibanking(Request $request){
        if($request->input('submit') != null){
            $qrpayment = QrPayment::Where('invoice', $request->input('invoice'))->get()->first();
            if($qrpayment->status == "false"){
                // return back()->with("false", "กรุณากดปุ่มยืนยันอีกครั้ง");
                return response()->json(['false'=>'กรุณากดปุ่มยืนยันอีกครั้ง'], 200);
            }
            return response()->json(['success'=>'กรุณากดปุ่มยืนยันอีกครั้ง', 'route'=>'/sponsor_successful_payment/'.encrypt($request->input("invoice")).''], 200);
            // return redirect(route('SponsorSuccessfulPayment', ['invoice' => encrypt($request->input('invoice'))]));
        }else{
            $qrpayment = QrPayment::Where('invoice', $request->input('invoice'))->get()->first();
            $qrpayment->status = "99";
            $qrpayment->save();

            if($request->input('package_id') != null){
                $data = $request->input('invoice');
                Package::deletePackage($data);

                return redirect(route('AdvtPackage'));
            }else{
                $data = $request->input('invoice');
                Package::deleteTranseection($data);

                return redirect(route('SponShoppingCart'));
            }
        }
    }

    public function sponsorTransfer($invoice = null){
        $sponsor = DB::table('sponsors')->where('USER_EMAIL', Auth::user()->email)->get();
        $transfer = DB::table('transfer_payments')->where('transferInvoice', decrypt($invoice))->first();
        $package = DB::table('my_package_buy')->where('packageBuy_invoice', decrypt($invoice))->first();
        $transeection = DB::table('transeection_sponshopping')->where('transeection_invoice', decrypt($invoice))->first();
        $countCart = DB::table('sponsor_shopping_cart')->where([['sponsor_shopping_cart.USER_ID', Auth::user()->id], ['sponsor_shopping_cart.sponsor_cart_status', 'false']])
                            ->join('games', 'games.GAME_ID', 'sponsor_shopping_cart.sponsor_cart_game')
                            ->select('sponsor_shopping_cart.*', 'games.GAME_NAME', 'games.RATED_B_L', 'games.GAME_DISCOUNT', 'games.GAME_IMG_PROFILE')
                            ->get();
        // dd($package);
        if($package == null){
            // dd("yes");
            return view('profile.sponsor.spon_transfer', compact('sponsor', 'transfer', 'countCart', 'transeection'));
        }else{
            // dd($transfer);
            return view('profile.sponsor.spon_transfer', compact('sponsor', 'transfer', 'countCart', 'package'));
        }
    }

    public function sponTransferPayment(Request $req){
        if($req->input('submit') != null){
            if($req->has('transferImg')){
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
                    
                    $value = transferPayment::updateTransfer($data);
                }

                if($req->input('package_id') != null){
                    return redirect(route('packagePay', ['id' => encrypt($req->input('package_id')), 'idT'=>encrypt('null')]));
                }else{
                    return redirect(route('packagePay', ['idT' => encrypt($req->input('transeection_id')), 'id'=>encrypt('null')]));
                }
            }else{
                $useTransferType = "package";
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
                    $data = array("transferAmount"=>$transferAmount, "transferฺBank_name"=>$transferฺBank_name, "transferStatus"=>$transferStatus, "useTransferType"=>$useTransferType,
                                "user_id"=>$user_id, "user_email"=>$user_email, "invoice"=>$invoice, "transferInvoice"=>$transferInvoice, "create_at"=>$create_at);
                    // dd($data);
                    $value = transferPayment::insertTransfer($data);
                }

                if($req->input('package_id') != null){
                    $allpackage = DB::table('packages')->where('package_id',$req->input('package_id'))->first();
                    $packageBuy_name = $allpackage->package_name;
                    $packageBuy_amount = $allpackage->package_amount;
                    $packageBuy_season = $allpackage->package_season;
                    $packageBuy_invoice = $transferInvoice;
                    $package_id = $allpackage->package_id;
                    $USER_ID = Auth::user()->id;
                    $USER_EMAIL = Auth::user()->email;

                    $data = array("packageBuy_name"=>$packageBuy_name, "packageBuy_invoice"=>$packageBuy_invoice, "package_id"=>$package_id, 
                            "packageBuy_amount"=>$packageBuy_amount, "packageBuy_season"=>$packageBuy_season,"USER_ID"=>$USER_ID, "USER_EMAIL"=>$USER_EMAIL);
                    $value = Package::packageBuy($data);

                    DB::table('transeection_sponshopping')->insert(array("transeection_amount"=>$packageBuy_amount, "transeection_type"=>"qr", "transeection_invoice"=>$packageBuy_invoice,
                            "USER_ID"=>$USER_ID, "USER_EMAIL"=>$USER_EMAIL));

                    return redirect(route('SponsorTransfer', ['invoice' => encrypt($transferInvoice)]));
                }else{
                    $transeection = DB::table('transeection_sponshopping')->where([['transeection_id', $req->input('transeection_id')]])->first();
                    $transeection_invoice = $transferInvoice;
                    $transeection_type = "Transfer";

                    $data = array("transeection_id"=>$req->input('transeection_id'), "transeection_invoice"=>$transeection_invoice, "transeection_type"=>$transeection_type);
                    Package::cartPaymentUpdate($data);
                    return redirect(route('SponsorTransfer', ['invoice' => encrypt($transferInvoice)]));
                }
            }
        }
    }

    public function SponsorSuccessfulPayment($invoice){
        // dd(decrypt($invoice));
        $sponsor = DB::table('sponsors')->where('USER_EMAIL', Auth::user()->email)->get();
        $package = DB::table('my_package_buy')->where([['my_package_buy.packageBuy_invoice', decrypt($invoice)], ['my_package_buy.USER_EMAIL', Auth::user()->email]])
                        ->join('packages','packages.package_id','my_package_buy.package_id')
                        ->select('my_package_buy.*', 'packages.package_game', 'packages.package_length')
                        ->first();
        $address = DB::table('addresses')->where('USER_EMAIL', Auth::user()->email)->get();
        $transeection = DB::table('transeection_sponshopping')->where('transeection_invoice', decrypt($invoice))->first();
        $countCart = DB::table('sponsor_shopping_cart')->where([['sponsor_shopping_cart.USER_ID', Auth::user()->id], ['sponsor_shopping_cart.sponsor_cart_status', 'false']])
                            ->join('games', 'games.GAME_ID', 'sponsor_shopping_cart.sponsor_cart_game')
                            ->select('sponsor_shopping_cart.*', 'games.GAME_NAME', 'games.RATED_B_L', 'games.GAME_DISCOUNT', 'games.GAME_IMG_PROFILE')
                            ->get();
        if($package == null){
            $gameList = DB::table('sponsor_shopping_cart')->where([['sponsor_shopping_cart.USER_ID', Auth::user()->id], ['sponsor_shopping_cart.sponsor_cart_status', 'true']])
                            ->join('games', 'games.GAME_ID', 'sponsor_shopping_cart.sponsor_cart_game')
                            ->select('sponsor_shopping_cart.*', 'games.GAME_NAME', 'games.RATED_B_L', 'games.GAME_DISCOUNT', 'games.GAME_IMG_PROFILE')
                            ->orderBy('sponsor_cart_id', 'desc')
                            ->get();
            
            $game_id = array();
            $shopping_id = array();
            $Gamehot = [];
            foreach($gameList as $game){
                $game_id[] = $game->sponsor_cart_game;
                $game_list = array_unique($game_id);
            }
            for($i=0;$i <= count($game_list); $i++){
                if(isset($game_list[$i])){
                    $gameTrue[$i] = DB::table('sponsor_shopping_cart')->where([['sponsor_shopping_cart.sponsor_cart_game', $game_list[$i]], ['sponsor_shopping_cart.USER_ID', Auth::user()->id]])
                            ->join('games', 'games.GAME_ID', 'sponsor_shopping_cart.sponsor_cart_game')
                            ->select('sponsor_shopping_cart.*', 'games.GAME_NAME', 'games.RATED_B_L', 'games.GAME_DISCOUNT', 'games.GAME_IMG_PROFILE')
                            ->orderBy('sponsor_cart_id', 'desc')
                            ->first();
                }
            }
            return view('profile.sponsor.spon_successful_payment', compact('sponsor', 'invoice', 'address', 'countCart', 'transeection', 'gameTrue'));
        }else{
            return view('profile.sponsor.spon_successful_payment', compact('sponsor', 'package', 'invoice', 'address', 'countCart', 'transeection'));
        }
    }

    public function AdsSpon(){
        $sponsor = DB::table('sponsors')->where('USER_EMAIL', Auth::user()->email)->get();
        $countCart = DB::table('sponsor_shopping_cart')->where([['sponsor_shopping_cart.USER_ID', Auth::user()->id], ['sponsor_shopping_cart.sponsor_cart_status', 'false']])
                            ->join('games', 'games.GAME_ID', 'sponsor_shopping_cart.sponsor_cart_game')
                            ->select('sponsor_shopping_cart.*', 'games.GAME_NAME', 'games.RATED_B_L', 'games.GAME_DISCOUNT', 'games.GAME_IMG_PROFILE')
                            ->get();
        $advertising = DB::table('advertising_links')->where('USER_EMAIL', Auth::user()->email)->get();
        return view('profile.sponsor.ads_sponsor', compact('sponsor', 'countCart', 'advertising'));
    }

    public function addAdsSpon(Request $request){
        if($request->input('submit') != null){
            $advertising_name = $request->input('advertising_name');
            $advertising_link = $request->input('advertising_link');
            $advertising_create = date('Y-m-d H:i:s');
            $USER_ID = Auth::user()->id;
            $USER_EMAIL = Auth::user()->email;

            $data = array("advertising_name"=>$advertising_name, "advertising_link"=>$advertising_link, "advertising_create"=>$advertising_create, "USER_ID"=>$USER_ID, "USER_EMAIL"=>$USER_EMAIL);
            // dd($data);
            DB::table('advertising_links')->insert($data);
            
            return back()->with("advertising", "เพิ่มโฆษณาเรียบร้อย");
        }
    }

    public function sponVisaCredit(Request $request){
        // dd($request);
        if($request->input('submit') != null){
            
            $paymentType = $request->input('paymentType');
            $invoice =  "VISACREDIT".time().Auth::user()->id;
            $amount = $request->input('amount');
            
            // $transeection = DB::table('transeection_sponshopping')->where('transeection_id', $transeection_id)->first();

            $credit_payments = new CreditPayment();
            $credit_payments->paymentType = $paymentType;
            $credit_payments->useType = "package";
            $credit_payments->amount = $amount;
            $credit_payments->invoice = $invoice;
            $credit_payments->user_id = Auth::user()->id;
            $credit_payments->user_email = Auth::user()->email;
            $credit_payments->save();

            $total = number_format($amount, 2, '', '');
            // dd("NO.1", $total, $transeection->transeection_price);
            if($request->input('transeection_id') != null){
                $transeection_id = $request->input('transeection_id');
                DB::table('transeection_sponshopping')->where('transeection_id', $transeection_id)->update(array('transeection_type'=>$paymentType, 'transeection_invoice'=>$invoice));
                
            }else{
                $allpackage = DB::table('packages')->where('package_id',$request->input('package_id'))->first();
                $packageBuy_name = $allpackage->package_name;
                $packageBuy_amount = $allpackage->package_amount;
                $packageBuy_season = $allpackage->package_season;
                $packageBuy_invoice = $invoice;
                $package_id = $allpackage->package_id;
                $USER_ID = Auth::user()->id;
                $USER_EMAIL = Auth::user()->email;
        
                $data = array("packageBuy_name"=>$packageBuy_name, "packageBuy_invoice"=>$packageBuy_invoice, "package_id"=>$package_id, 
                        "packageBuy_amount"=>$packageBuy_amount, "packageBuy_season"=>$packageBuy_season,"USER_ID"=>$USER_ID, "USER_EMAIL"=>$USER_EMAIL);
                $value = Package::packageBuy($data);

                DB::table('transeection_sponshopping')->insert(array("transeection_amount"=>$packageBuy_amount, "transeection_type"=>$paymentType, "transeection_invoice"=>$packageBuy_invoice,
                    "USER_ID"=>$USER_ID, "USER_EMAIL"=>$USER_EMAIL));
            }

            $pay_type = 'PACA';
            $secure_key = '2MU3bSrnXhZ.UaMieWO8liyxrpWOQ3B-C8TR32xUs7e4A8wffY8V34FTHLL2eDvGMlyGGYENOCqUrKbkOqCleFkVHM6hDUeVwCBF-FUwcb4VNfgEzPU78owJGfGAuWp1M3H22tNyKc8ZbI7DuPHVXWsny65e50iGXnq.rTgZVIKPj1ue2E5d7q092FxxFkA0WzgIkkObV7knUnRHI5vPRxHCuVGlnj4qLIjVNsq2E5vvXETAUX.5SfwzaAj7H8CcnmLy8Kki5vv5fHzCnnezLQ0mJOAbI1UtDugPZUfFYGsxMRhmFXfMawErOZKlL-wLlSrYjQhwDDPvU-u1avfCglf__';
            $site_cd = 'A0001165MK';

            $hash_string  = $pay_type . $invoice . $total . $site_cd . $secure_key . Auth::user()->id;
            $hash_data = hash('sha256', $hash_string);

            $data["transeection_amount"] = $amount;
            $data["transeection_invoice"] = $invoice;
            $data["order_no"] = $invoice;
            $data["user_id"] = Auth::user()->id;
            $data["good_name"] = "PACKAGE";
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
}
