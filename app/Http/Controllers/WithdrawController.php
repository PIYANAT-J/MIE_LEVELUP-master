<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Withdraw;

use Session;
use Image;
use Auth;
use DB;

class WithdrawController extends Controller
{
    public function withdraw(){
        $developer = DB::table('developers')->where('USER_EMAIL', Auth::user()->email)->get();
        $userKyc = DB::table('kycs')->where('USER_EMAIL', Auth::user()->email)->first();
        $bank = DB::table('mybanks')->where('user_email',Auth::user()->email)->first();
        $withdraw = DB::table('withdraws')->where('user_email',Auth::user()->email)->orderBy('id', 'desc')->get();
        $wallet = 0;
        return view('profile.topup.devlvp_withdraw', compact('developer', 'userKyc', 'bank', 'withdraw', 'wallet'));
    }

    public function stor(Request $req){
        if($req->input('submit') != null){
            $withdrawAmount = $req->input('withdrawAmount');
            $withdrawNote = $req->input('withdrawNote');
            $withdrawฺBank_name = $req->input('withdrawฺBank_name');
            $withdrawBank_account = $req->input('withdrawBank_account');
            $withdrawInvoice = time().Auth::user()->id;
            $withdrawStatus = "รอการอนุมัติ";
            $user_id = Auth::user()->id;
            $user_email = Auth::user()->email;
            $createAccount = $req->input('createAccount');

            if($withdrawAmount != "" && $withdrawฺBank_name != "" && $withdrawBank_account != "" && $createAccount != ""){
                $data = array("withdrawAmount"=>$withdrawAmount, "withdrawNote"=>$withdrawNote, "withdrawฺBank_name"=>$withdrawฺBank_name, "withdrawBank_account"=>$withdrawBank_account,
                            "withdrawInvoice"=>$withdrawInvoice, "withdrawStatus"=>$withdrawStatus, "user_id"=>$user_id, "user_email"=>$user_email, "createAccount"=>$createAccount);
                // dd($data);
                $value = Withdraw::insert($data);
            }
        }
        return redirect()->action('WithdrawController@withdraw');
    }
}
