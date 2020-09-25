<?php

namespace App\Http\Controllers\Avatar;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use DB;
use Auth;

class marketItemController extends Controller
{
    public function ShoppingCart(){
        $guest_user = DB::table('guest_users')->where('USER_EMAIL', Auth::user()->email)->get();
        $userKyc = DB::table('kycs')->where('USER_EMAIL', Auth::user()->email)->first();
        $shopping = DB::table('shopping_cart')->where('USER_EMAIL', Auth::user()->email)->get();
        return view('avatar.shopItem.shopping_cart', compact('guest_user', 'userKyc', 'shopping'));
    }

    public function Shop(){
        $guest_user = DB::table('guest_users')->where('USER_EMAIL', Auth::user()->email)->get();
        $userKyc = DB::table('kycs')->where('USER_EMAIL', Auth::user()->email)->first();
        $shopping = DB::table('shopping_cart')->where('USER_EMAIL', Auth::user()->email)->get();
        $marketItem = DB::table('market_items')
                        ->join('users', 'users.email', 'market_items.USER_EMAIL')
                        ->join('guest_users', 'guest_users.USER_EMAIL', 'users.email')
                        ->select('market_items.*', 'users.name', 'users.surname', 'guest_users.GUEST_USERS_IMG')
                        ->get();
        // dd($marketItem);
        return view('avatar.shopItem.shop', compact('guest_user', 'userKyc', 'shopping', 'marketItem'));
    }

    public function add_ShoppingCart(Request $request){
        if($request->input('submit') != null){
            dd($request);
        }
    }
}
