<?php

namespace App\Http\Controllers\Topup;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

use DB;
use Auth;

use App\CreditPayment;
use App\QrPayment;
use DNS2D;

class qrPaymentController extends Controller
{
    public function indexPayment(){
        $guest_user = DB::table('guest_users')->where('USER_EMAIL', Auth::user()->email)->get();
        $userKyc = DB::table('kycs')->where('USER_EMAIL', Auth::user()->email)->first();
        $payment = DB::table('qr_payments')->where([['user_email', Auth::user()->email], ['useType', 'wallet']])->orderBy('id', 'desc')->get();
        $transfer = DB::table('transfer_payments')->where([['user_email', Auth::user()->email], ['useTransferType', 'wallet']])->orderBy('id', 'desc')->get();
        $credit = CreditPayment::where([['status', 'true'], ['user_email', Auth::user()->email], ['useType', 'wallet']])->get();
        $wallet = 0;
        foreach($transfer as $sumtransfer){
            if($sumtransfer->transferStatus == "อนุมัติแล้ว"){
                $wallet = $wallet+$sumtransfer->transferAmount;
            }
        }
        foreach($payment as $sumpayment){
            if($sumpayment->status == "true"){
                $wallet = $wallet+$sumpayment->amount;
            }
        }
        foreach($credit as $sumcredit){
            $wallet = $wallet+$sumcredit->amount;
        }

        return view('profile.topup.userlvp_topup', compact('guest_user', 'userKyc', 'payment', 'transfer', 'credit', 'wallet'));
    }

    public function mobilebanking(Request $request){
        $qrpayment = new QrPayment();
        $qrpayment->user_id = Auth::user()->id;
        $qrpayment->user_email = Auth::user()->email;
        $qrpayment->useType = "wallet";
        $qrpayment->qrType = "qr30";
        $qrpayment->paymentType = $request->paymentType;
        $qrpayment->amount = $request->amount;
        $qrpayment->note = $request->note;
        $qrpayment->qr_invoice = time().Auth::user()->id;
        $qrpayment->bank_name = $request->bank_name;
        $qrpayment->blockchain = "###TOPUP-LEVELup###";
        $qrpayment->save();
        
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

        $qr = QrPayment::where('invoice', $qrcode->invoice)->first();
        $bank_name = asset('home/logo/'.$qr->bank_name.'.svg');
        return response()->json([
            'rawQrCode' => DNS2D::getBarcodeHTML($qr->rawQrCode, "QRCODE",6,6),
            'invoice' => $qr->invoice,
            'amount' => $qr->amount,
            'bank_name' => $bank_name,
        ]);
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