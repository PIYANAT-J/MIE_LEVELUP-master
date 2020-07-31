<?php

namespace App\Http\Controllers\Topup\Call_back;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\QrPayment;
use DB;

class Callback_scbController extends Controller
{
    // public function testCallback(){
    //     $qrpayment = QrPayment::Where('invoice', $invoice)->get()->first();
    //     dd($qrpayment->status);
    // }
    
    public function callback(Request $request)
    {
        // dd(['empty']);
        $invoice = $request->invoice;
        $message = $request->status;
        $qrpayment = QrPayment::Where('invoice', $invoice)->get()->first();
        if (QrPayment::Where('invoice', $invoice)->get()->count()) {
            if ($qrpayment->status === 'false') {
                switch ($message) {
                    case 'success':
                        $status = 'true';
                        break;
                    case 'Expired':
                        $status = 99;
                        break;
                    default;
                        $status = 'false';
                        break; 
                }
                
                $qrpayment->status = $status;
                // $qrpayment->client_ip = request()->ip();
                $qrpayment->confirm_at = date('Y-m-d H:i:s');

                // if ($status === 1) {
                //     $ack = $this->callack($invoice);

                //     $amount = $mobiletopup->amount - ($mobiletopup->amount * 2.5 / 100);
                //     $credit = $amount / 30;
                //     $type = 'mobiletopup';
                //     $user_id = $mobiletopup->user_id;
                //     $campaign_id = 1;
                //     $ref_id = $mobiletopup->id;
                //     $status = 1;
                //     $blockchain = "###MULTIINNOVATION###";

                //     $transaction = new Transaction();
                //     $transaction->type = $type;
                //     $transaction->user_id = $user_id;
                //     $transaction->campaign_id = $campaign_id;
                //     $transaction->ref_id = $ref_id;
                //     $transaction->credit = $credit;
                //     $transaction->status = $status;
                //     $transaction->blockchain = $blockchain;

                //     if ($transaction->save()) {
        
                //         $spi = new Spi();
                //         $spi->type = $type;
                //         $spi->description = $type;
                //         $spi->amount = $mobiletopup->amount - $amount;
                //         $spi->save();

                //         $balance = Balance::where('user_id', $user_id)
                //         ->get()->first();

                //         if ($balance) {
                //             $balance->credit += $credit;
                //             $balance->save();
                //         } else {
                //             $balance = new Balance();
                //             $balance->user_id = $user_id;
                //             $balance->credit = $credit;
                //             $balance->save();
                //         }

                //     }

                //     $qrpayment->save();
                // }else {
                    $qrpayment->save();
                // }
            }
            return response()->json(['success'=>$qrpayment->invoice], 200);
        } else {
            return response()->json(['success'=>'empty'], 200);
        }
        
    }


    // public function callack($invoice)
    // {
    //     $register = $this->getToken();
    //     $token = $register->token;
    //     $headers = [
    //         'Content-Type' => 'application/json',
    //         'Authorization' => $token
    //     ];

    //     $client = new \GuzzleHttp\Client();

    //     $response = $client->request('POST', 'https://iot.finsense.co/device/received', [
    //         'headers' => $headers,
    //         'json' => [
    //         "qrType" => "qr30",
    //         "invoice" => $invoice
    //     ]
    //     ]);

    //     $response->getStatusCode(); # 200
    //     $response->getHeaderLine('content-type');
    //     $response->getBody();
    //     $contents = json_decode($response->getBody());

    //     return $contents;
    // }


    // public function getToken()
    // {

    //   $headers = [
    //     'Content-Type' => 'application/json',
    //   ];

    //   $client = new \GuzzleHttp\Client();
    //   $response = $client->request('POST', 'https://iot.finsense.co/device/register', [
    //       'headers' => $headers,
    //       'json' => [
    //         "companyName" => "SP INVESTOREST COMPANY LIMITED",
    //         "branchName" => "headoffice",
    //         "deviceName" => "Device-Multi"
    //     ]
    //   ]);

    //   $response->getStatusCode();
    //   $response->getHeaderLine('content-type');
    //   $response->getBody();
    //   $contents = json_decode($response->getBody());

    //   return $contents;
    // }
}
