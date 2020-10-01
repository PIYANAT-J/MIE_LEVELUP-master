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
        return view('avatar.saleItem.sale_item', compact('guest_user', 'userKyc', 'shopping', 'marketItem'));
    }

    public function AddSaleItem(){
        $guest_user = DB::table('guest_users')->where('USER_EMAIL', Auth::user()->email)->get();
        $userKyc = DB::table('kycs')->where('USER_EMAIL', Auth::user()->email)->first();
        $shopping = DB::table('shopping_cart')->where([['USER_EMAIL', Auth::user()->email], ['shopping_cart_status', 'false']])->get();
        $item = My_item::where([['USER_EMAIL', Auth::user()->email], ['my_item_status', 'false']])->get();
        // foreach($item as $itemModal){
        //     if($itemModal->item_type == "clothes"){
        //         if($itemModal->item_gender == "woman"){
        //             if($itemModal->item_other == "hero"){
        //             }else{
        //             }
        //         }elseif($itemModal->item_gender == "man"){
        //             if($itemModal->item_other == "hero"){
        //             }else{
        //             }
        //         }
        //     }elseif($itemModal->item_type == "eyes"){
        //         if($itemModal->item_gender == "woman"){
        //             if($itemModal->item_other == "hero"){
        //             }else{
        //             }
        //         }elseif($itemModal->item_gender == "man"){
        //             if($itemModal->item_other == "hero"){
        //             }else{
        //             }
        //         }
        //     }elseif($itemModal->item_type == "glasses"){
        //     }elseif($itemModal->item_type == "hair"){
        //         if($itemModal->item_gender == "woman"){
        //             if($itemModal->item_other == "hero"){
        //             }else{
        //             }
        //         }elseif($itemModal->item_gender == "man"){
        //             if($itemModal->item_other == "hero"){
        //             }else{
        //             }
        //         }
        //     }elseif($itemModal->item_type == "other"){
        //     }elseif($itemModal->item_type == "weapon"){
        //     }
        // }
        // dd($item);
        return view('avatar.saleItem.add_sale_item', compact('guest_user', 'userKyc', 'shopping', 'item'));
    }

    public function add_saleItem(Request $request){
        if($request->input('submit') == "sale_Item"){
            dd($request);
            $marketItem = Market_item::where([['item_id', $request->input('item_id')]])->get();
            if(count($marketItem) > 0){
                dd(count($marketItem));
                $add_market = new Market_item();
                $add_market->item_name = $marketItem->item_name;
                $add_market->item_price = $request->input('price');
                $add_market->item_img = $marketItem->item_name;
                $add_market->item_gender = $marketItem->item_name;
                $add_market->item_type = $marketItem->item_name;
                $add_market->item_other = $marketItem->item_name;
                $add_market->item_description = $marketItem->item_name;
                $add_market->item_level = $marketItem->item_name;
                $add_market->item_amount = $request->input('amount');
                $add_market->USER_ID = Auth::user()->id;
                $add_market->USER_EMAIL = Auth::user()->email;
                $add_market->save();
            }
            
        }
    }
}
