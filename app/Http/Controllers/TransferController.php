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
                $img_name = 'transferImg_'.time().'.'.$uploadImg->getClientOriginalExtension();
                $pathImg = public_path('section/Transfer_Img');
                $uploadImg->move($pathImg, $img_name);

                $transferNote = $req->input('transferNote');
                $transferStatus = "รอการอนุมัติ";
                $transferImg = $img_name;
                $user_id = Auth::user()->id;
                $user_email = Auth::user()->email;
                $id = $req->input('id');

                // $id = DB::table('transfer_payments')->where()->value('id');

                if($transferImg != "" && $transferStatus != "" && $id != ""){
                    $data = array("transferNote"=>$transferNote, "transferStatus"=>$transferStatus, "transferImg"=>$transferImg, "user_id"=>$user_id, "user_email"=>$user_email, "id"=>$id);

                    $value = transferPayment::Update($data);
                }
            }else{
                $transferAmount = $req->input('transferAmount');
                $transferฺBank_name = $req->input('transferฺBank_name');
                $transferStatus = "ยืนยันการโอน";
                $user_id = Auth::user()->id;
                $user_email = Auth::user()->email;
                dd($transferAmount);
                if($transferAmount != "" && $transferฺBank_name != ""){
                    $data = array("transferAmount"=>$transferAmount, "transferฺBank_name"=>$transferฺBank_name, "user_id"=>$user_id, "user_email"=>$user_email);
                    dd($data);
                    $value = transferPayment::Insert($data);
                }
            }
        }
        return redirect(route('UserTopup'));
    }
}
