<?php

namespace App\Http\Controllers\Sponsor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

use DB;
use Auth;

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
            // dd($allPackage);
            return view('profile.sponsor.advt_package', compact('sponsor', 'allPackage'));
        }else{
            $sponsor = DB::table('sponsors')->where('USER_EMAIL', Auth::user()->email)->get();
            $package = DB::table('my_package_buy')->where('USER_EMAIL', Auth::user()->email)->get();
            $allPackage = DB::table('packages')->get();
            return view('profile.sponsor.advt_package', compact('sponsor', 'package', 'allPackage'));
        }
    }

    public function packagePay($id){
        $sponsor = DB::table('sponsors')->where('USER_EMAIL', Auth::user()->email)->get();
        $address = DB::table('addresses')->where('USER_EMAIL', Auth::user()->email)->get();
        $allPackage = DB::table('packages')->where('package_id', decrypt($id))->first();
        $package = DB::table('my_package_buy')->where([['package_id', decrypt($id)], ['USER_EMAIL', Auth::user()->email]])->first();
        if($package != null){
            $transfer = DB::table('transfer_payments')->where('transferInvoice', $package->packageBuy_invoice)->first();
            // dd($address );
            return view('profile.sponsor.spon_payment', compact('sponsor', 'allPackage', 'package', 'transfer', 'address'));
        }
        // dd($package);
        
        // dd($transfer);
        return view('profile.sponsor.spon_payment', compact('sponsor', 'allPackage', 'package', 'address'));
    }

    public function AdvtManagement($id){
        $sponsor = DB::table('sponsors')->where('USER_EMAIL', Auth::user()->email)->get();
        $package = DB::table('my_package_buy')->where([['my_package_buy.package_id', decrypt($id)], ['my_package_buy.USER_EMAIL', Auth::user()->email]])
                        ->join('packages','packages.package_id','my_package_buy.package_id')
                        ->select('my_package_buy.*', 'packages.package_game', 'packages.package_length')
                        ->first();
        $game = DB::table('games')->where('GAME_STATUS','อนุมัติ')->get();
        $packageGame = json_decode($package->packageBuy_gameSpon);
        // dd($packageGame);
        return view('profile.sponsor.advt_management', compact('sponsor', 'package', 'packageGame', 'game'));
    }

    // PackagePaymentBySponsor
    public function sponsoribanking($invoice = null){
        // dd($invoice);
        $sponsor = DB::table('sponsors')->where('USER_EMAIL', Auth::user()->email)->get();
        $package = DB::table('my_package_buy')->where('packageBuy_invoice', decrypt($invoice))->first();
        $qrpayment = QrPayment::Where('invoice', decrypt($invoice))->get()->first();
        $invoice =  DNS2D::getBarcodeHTML($qrpayment->rawQrCode, "QRCODE");
        $invoice = $qrpayment->rawQrCode;

        // dd($qrpayment);
        
        return view('profile.sponsor.spon_payment_ibanking_confirm', compact('sponsor', 'invoice', 'qrpayment', 'package'));
    }

    public function packageibanking(Request $request){
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

        return redirect(route('Sponsoribanking', ['invoice' => encrypt($qrpayment->invoice)]));
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
                return back()->with("false", "กรุณากดปุ่มยืนยันอีกครั้ง");
            }
            return redirect(route('SponsorSuccessfulPayment', ['invoice' => encrypt($request->input('invoice'))]));
        }else{
            $qrpayment = QrPayment::Where('invoice', $request->input('invoice'))->get()->first();
            $qrpayment->status = "99";
            $qrpayment->save();

            $data = $request->input('invoice');
            $value = Package::deletePackage($data);

            return redirect(route('AdvtPackage'));
        }
    }

    public function sponsorTransfer($invoice = null){
        $sponsor = DB::table('sponsors')->where('USER_EMAIL', Auth::user()->email)->get();
        $transfer = DB::table('transfer_payments')->where('transferInvoice', decrypt($invoice))->first();
        $package = DB::table('my_package_buy')->where('packageBuy_invoice', decrypt($invoice))->first();
        return view('profile.sponsor.spon_transfer', compact('sponsor', 'transfer', 'package'));
    }

    public function sponTransferPayment(Request $req){
        if($req->input('submit') != null){
            // dd($req);
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
                return redirect(route('packagePay', ['id' => encrypt($package_id)]));
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
                $transferInvoice = $transferฺBank_name.time().$user_id;
                $create_at = date('Y-m-d H:i:s');

                if($transferAmount != "" && $transferฺBank_name != ""){
                    $data = array("transferAmount"=>$transferAmount, "transferฺBank_name"=>$transferฺBank_name, "transferStatus"=>$transferStatus, 
                                "user_id"=>$user_id, "user_email"=>$user_email, "invoice"=>$invoice, "transferInvoice"=>$transferInvoice, "create_at"=>$create_at);
                    // dd($data);
                    $value = transferPayment::insertTransfer($data);
                }

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

                return redirect(route('SponsorTransfer', ['invoice' => encrypt($transferInvoice)]));
            }
        }
    }

    public function SponsorSuccessfulPayment($invoice){
        $sponsor = DB::table('sponsors')->where('USER_EMAIL', Auth::user()->email)->get();
        $package = DB::table('my_package_buy')->where([['my_package_buy.packageBuy_invoice', decrypt($invoice)], ['my_package_buy.USER_EMAIL', Auth::user()->email]])
                        ->join('packages','packages.package_id','my_package_buy.package_id')
                        ->select('my_package_buy.*', 'packages.package_game', 'packages.package_length')
                        ->first();
        $address = DB::table('addresses')->where('USER_EMAIL', Auth::user()->email)->get();
        return view('profile.sponsor.spon_successful_payment', compact('sponsor', 'package', 'invoice', 'address'));
    }
}
