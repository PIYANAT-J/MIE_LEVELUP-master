<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Auth;

use App\TransferPayment;

class TransferController extends Controller{

    public function userPass(){
        $gameShalf = DB::table('downloads')->where('USER_ID', Auth::user()->id)->get();
        if($gameShalf->count() == 0){
            $guest_user = DB::table('guest_users')->where('USER_EMAIL', Auth::user()->email)->get();
            $userKyc = DB::table('kycs')->where('USER_EMAIL', Auth::user()->email)->first();
            return view('profile.password.userlvp_change_password', compact('guest_user', 'userKyc'));
        }else{
            $guest_user = DB::table('guest_users')->where('USER_EMAIL', Auth::user()->email)->get();
            $userKyc = DB::table('kycs')->where('USER_EMAIL', Auth::user()->email)->first();
            return view('profile.password.userlvp_change_password', compact('guest_user', 'userKyc'));
        }
    }

    public function userPoint(){
        $gameShalf = DB::table('downloads')->where('USER_ID', Auth::user()->id)->get();
        if($gameShalf->count() == 0){
            $guest_user = DB::table('guest_users')->where('USER_EMAIL', Auth::user()->email)->get();
            $userKyc = DB::table('kycs')->where('USER_EMAIL', Auth::user()->email)->first();
            return view('profile.point.userlvp_history', compact('guest_user', 'userKyc'));
        }else{
            $guest_user = DB::table('guest_users')->where('USER_EMAIL', Auth::user()->email)->get();
            $userKyc = DB::table('kycs')->where('USER_EMAIL', Auth::user()->email)->first();
            return view('profile.point.userlvp_history', compact('guest_user', 'userKyc'));
        }
    }

    public function userRank(){
        $gameShalf = DB::table('downloads')->where('USER_ID', Auth::user()->id)->get();
        if($gameShalf->count() == 0){
            $guest_user = DB::table('guest_users')->where('USER_EMAIL', Auth::user()->email)->get();
            $userKyc = DB::table('kycs')->where('USER_EMAIL', Auth::user()->email)->first();
            return view('profile.userlvp_rank', compact('guest_user', 'userKyc'));
        }else{
            $guest_user = DB::table('guest_users')->where('USER_EMAIL', Auth::user()->email)->get();
            $userKyc = DB::table('kycs')->where('USER_EMAIL', Auth::user()->email)->first();
            return view('profile.userlvp_rank', compact('guest_user', 'userKyc'));
        }
    }

    public function devPoint(){
        $developer = DB::table('developers')->where('USER_EMAIL', Auth::user()->email)->get();
        $userKyc = DB::table('kycs')->where('USER_EMAIL', Auth::user()->email)->first();
        return view('profile.point.devlvp_history', compact('developer', 'userKyc'));
    }

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
                $update_at = date('Y-m-d H:i:s');

                if($transferImg != "" && $transferStatus != "" && $id != ""){
                    $data = array("transferNote"=>$transferNote, "transferStatus"=>$transferStatus, "transferImg"=>$transferImg, "user_id"=>$user_id, 
                                "user_email"=>$user_email, "id"=>$id, "update_at"=>$update_at);
                    
                    $value = transferPayment::updateTransfer($data);
                }
            }else{
                $useTransferType = "wallet";
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
            }
        }
        return redirect(route('UserTopup'));
    }
}
