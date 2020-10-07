<?php

namespace App\Http\Controllers\Avatar;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use DB;
use Auth;

use App\Default_item;
use App\My_item;

class avatarController extends Controller
{
    public function Avatar(){
        $guest_user = DB::table('guest_users')->where('USER_EMAIL', Auth::user()->email)->get();
        $userKyc = DB::table('kycs')->where('USER_EMAIL', Auth::user()->email)->first();
        $shopping = DB::table('shopping_cart')->where([['USER_EMAIL', Auth::user()->email], ['shopping_cart_status', 'false']])->get();
        $default = Default_item::all();
        $item = My_item::where([['USER_EMAIL', Auth::user()->email]])->get();
        // dd($default);
        foreach($guest_user as $defaultAvatar){
            // dd(json_decode($defaultAvatar->AVATAR));
            $avatar = json_decode($defaultAvatar->AVATAR);
        }
        // dd($avatar);
        return view('avatar.avatar', compact('guest_user', 'avatar', 'userKyc', 'shopping', 'default', 'item', 'avatar'));
    }
}
