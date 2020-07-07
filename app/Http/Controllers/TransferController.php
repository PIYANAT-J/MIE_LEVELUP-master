<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Auth;

use App\TransferPayment;

class TransferController extends Controller
{
    public function transferPayment(Request $req){
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

                if($transferImg != "" && $transferStatus != "" && $id != ""){
                    $data = array("transferNote"=>$transferNote, "transferStatus"=>$transferStatus, "transferImg"=>$transferImg, "user_id"=>$user_id, 
                                "user_email"=>$user_email, "id"=>$id);
                    
                    $value = transferPayment::updateTransfer($data);
                }
            }else{
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
                $transferInvoice = time().$user_id;

                if($transferAmount != "" && $transferฺBank_name != ""){
                    $data = array("transferAmount"=>$transferAmount, "transferฺBank_name"=>$transferฺBank_name, "transferStatus"=>$transferStatus, 
                                "user_id"=>$user_id, "user_email"=>$user_email, "invoice"=>$invoice, "transferInvoice"=>$transferInvoice);
                    // dd($data);
                    $value = transferPayment::insertTransfer($data);
                }
            }
        }
        return redirect(route('UserTopup'));
    }
}
