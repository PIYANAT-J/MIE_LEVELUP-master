<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Auth;

use App\QrPayment;

class qrPaymentController extends Controller
{
    public function indexPayment(){
        $guest_user = DB::table('guest_users')->where('USER_EMAIL', Auth::user()->email)->get();
        $userKyc = DB::table('kycs')->where('USER_EMAIL', Auth::user()->email)->first();
        return view('profile.topup.userlvp_topup', compact('guest_user', 'userKyc'));
    }
}
