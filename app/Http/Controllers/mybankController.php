<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mybank;

use DB;
use Auth;
use Session;

class mybankController extends Controller
{
    public function addBank(Request $req){
        if($req->input('submit') != null){
            $bankName = $req->input('bankName');
            $accountName = $req->input('accountName');
            $accountNumber = $req->input('accountNumber');
            $accountType = $req->input('accountType');
            $accountBranch = $req->input('accountBranch');
            $user_id = Auth::user()->id;
            $user_email = Auth::user()->email;
            $createAccount = $req->input('createAccount');
            $updateAccount = $req->input('updateAccount');
            if($bankName != "" && $accountName != "" && $accountNumber != "" && $accountType != ""){
                $data = array("bankName"=>$bankName, "accountName"=>$accountName, "accountNumber"=>$accountNumber, "accountType"=>$accountType, 
                            "accountBranch"=>$accountBranch, "user_id"=>$user_id, "user_email"=>$user_email, "createAccount"=>$createAccount, "updateAccount"=>$updateAccount);
                // dd($data);
                $value = Mybank::updateAndinsert($data);
            }
        }
        return redirect(route('DevWithdraw'));
    }
}
