<?php

namespace App\Http\Controllers\Avatar;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use DB;
use Auth;

use App\My_item;
use App\Market_item;

class saleItemController extends Controller
{
    //Avatar\saleItemController
    public function Sale(){
        $guest_user = DB::table('guest_users')->where('USER_EMAIL', Auth::user()->email)->get();
        $userKyc = DB::table('kycs')->where('USER_EMAIL', Auth::user()->email)->first();
        $shopping = DB::table('shopping_cart')->where([['USER_EMAIL', Auth::user()->email], ['shopping_cart_status', 'false']])->get();
        // $item = My_item::where([['USER_EMAIL', Auth::user()->email], ['my_item_status', 'false']])->get();
        $marketItem = Market_item::where([['USER_EMAIL', Auth::user()->email]])->get();
        // dd($marketItem);
        return view('avatar.saleItem.sale_item', compact('guest_user', 'userKyc', 'shopping', 'marketItem'));
    }

    public function AddSaleItem(){
        $guest_user = DB::table('guest_users')->where('USER_EMAIL', Auth::user()->email)->get();
        $userKyc = DB::table('kycs')->where('USER_EMAIL', Auth::user()->email)->first();
        $shopping = DB::table('shopping_cart')->where([['USER_EMAIL', Auth::user()->email], ['shopping_cart_status', 'false']])->get();
        $item = My_item::where([['USER_EMAIL', Auth::user()->email], ['my_item_status', 'false']])->get();
        return view('avatar.saleItem.add_sale_Item', compact('guest_user', 'userKyc', 'shopping', 'item'));
    }

    public function add_saleItem(Request $request){
        if($request->input('submit') == "sale_Item"){
            // dd($request);
            $my_item = My_item::where([['item_id', $request->input('item_id')], ['USER_EMAIL', Auth::user()->email]])->first();
            $marketItem = Market_item::where([['item_id', $request->input('item_id')]])->first();
            if($marketItem != null){
                // dd($marketItem);
                $add_market = new Market_item();
                $add_market->item_name = $marketItem->item_name;
                $add_market->item_price = $request->input('price');
                $add_market->item_img = $marketItem->item_img;
                $add_market->item_gender = $marketItem->item_gender;
                $add_market->item_type = $marketItem->item_type;
                $add_market->item_other = $marketItem->item_other;
                $add_market->item_description = $marketItem->item_description;
                $add_market->item_level = $marketItem->item_level;
                $add_market->item_amount = $request->input('amount');
                $add_market->USER_ID = Auth::user()->id;
                $add_market->USER_EMAIL = Auth::user()->email;

                $sumamount = $my_item->my_item_amount_discount + $request->input('amount');
                My_item::where([['item_id', $request->input('item_id')], ['USER_EMAIL', Auth::user()->email]])->update(array("my_item_amount_discount" => $sumamount));
                // dd($add_market);
                $add_market->save();
            }
            return back()->with("success","ประกาศขายเรียบร้อย");
        }
    }
}
