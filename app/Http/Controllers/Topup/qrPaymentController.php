<?php

namespace App\Http\Controllers\Topup;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

use DB;
use Auth;

use App\QrPayment;
use DNS2D;

class qrPaymentController extends Controller
{
    public function indexPayment(){
        $guest_user = DB::table('guest_users')->where('USER_EMAIL', Auth::user()->email)->get();
        $userKyc = DB::table('kycs')->where('USER_EMAIL', Auth::user()->email)->first();
        $payment = DB::table('qr_payments')->where('user_email', Auth::user()->email)->orderBy('id', 'desc')->get();
        $transfer = DB::table('transfer_payments')->where('user_email', Auth::user()->email)->orderBy('id', 'desc')->get();

        $sumPayment = DB::table('qr_payments')->where('status', 'true')->where('user_email', Auth::user()->email)->get();
        $sumTransfer = DB::table('transfer_payments')->where('transferStatus', 'อนุมัติแล้ว')->where('user_email', Auth::user()->email)->get();
        $wallet = 0;
        foreach($sumTransfer as $sumtransfer){
            $wallet = $wallet+$sumtransfer->transferAmount;
        }
        foreach($sumPayment as $sumpayment){
            $wallet = $wallet+$sumpayment->amount;
        }
        // dd($payment->status);

        return view('profile.topup.userlvp_topup', compact('guest_user', 'userKyc', 'payment', 'transfer', 'wallet'));
    }

    // public function qrcode($invoice = null){
    //     $guest_user = DB::table('guest_users')->where('USER_EMAIL', Auth::user()->email)->get();
    //     $userKyc = DB::table('kycs')->where('USER_EMAIL', Auth::user()->email)->first();

    //     $qrpayment = QrPayment::Where('invoice', decrypt($invoice))->get()->first();

    //     $invoice =  DNS2D::getBarcodeHTML($qrpayment->rawQrCode, "QRCODE");
    //     $invoice = $qrpayment->rawQrCode;
    //     return view('profile.topup.userlvp_topup', compact('guest_user', 'userKyc', 'invoice'));
    // }

    public function mobilebanking(Request $request){
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
        // dd($qrpayment);
        
        // $error = Validator::make($request->all(), $rules);

        // if($error->fails())
        // {
        //     return response()->json(['errors' => $error->errors()->all()]);
        // }
        // return response()->json(['success' => 'Data Added successfully.']);

        $qrcode = $this->getQrcode($qrpayment->amount, $qrpayment->note );
        
        $qrpayment = QrPayment::find($qrpayment->id);
        $qrpayment->rawQrCode = $qrcode->rawQrCode;
        $qrpayment->invoice = $qrcode->invoice;
        $qrpayment->save();

        // return redirect(route('qrcode', ['invoice' => encrypt($qrpayment->invoice)]));
        return redirect(route('UserTopup'));
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
}