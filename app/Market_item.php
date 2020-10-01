<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use DB;

class Market_item extends Model
{
    public static function shopping_cart($data){
        //Market_item::shopping_cart($data);
        DB::table('shopping_cart')->insert($data);
    }

    // public static function shopping_cart_payment($data){
    //     // dd($data);
    //     DB::table('transeection_buy_items')->insert($data);
    // }
}
