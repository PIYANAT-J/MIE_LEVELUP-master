<?php

namespace App\Http\Controllers\Avatar;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use DB;
use Auth;

class avatarController extends Controller
{
    public function Avatar(){
        $guest_user = DB::table('guest_users')->where('USER_EMAIL', Auth::user()->email)->get();
        $userKyc = DB::table('kycs')->where('USER_EMAIL', Auth::user()->email)->first();
        $shopping = DB::table('shopping_cart')->where([['USER_EMAIL', Auth::user()->email], ['shopping_cart_status', 'false']])->get();
        return view('avatar.avatar', compact('guest_user', 'userKyc', 'shopping'));
    }
}
