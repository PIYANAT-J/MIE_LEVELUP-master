<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use DB;
use Auth;

class Package extends Model
{
    public static function packageBuy($data){
        $count = DB::table('my_package_buy')->where('packageBuy_invoice', $data['packageBuy_invoice'])->get();
        if($count->count() == 0 ){
            DB::table('my_package_buy')->insert($data);
        }else{
            DB::table('my_package_buy')
                ->where('packageBuy_invoice', $data['packageBuy_invoice'])
                ->update($data);
        }
    }

    public static function deletePackage($data){
        DB::table('my_package_buy')->where('packageBuy_invoice', $data)->delete();
    }

    public static function deleteTranseection($data){
        DB::table('transeection_sponshopping')->where('transeection_invoice', $data)->delete();
    }

    public static function gamePackage($data){
        // dd($data);
        DB::table('my_package_buy')
            ->where('packageBuy_invoice', $data['packageBuy_invoice'])
            ->update($data);
    }

    public static function cartGame($data){
        DB::table('sponsor_shopping_cart')->insert($data);
    }

    public static function cartGameUpdate($data){
        DB::table('sponsor_shopping_cart')
            ->where('sponsor_cart_id', $data['sponsor_cart_id'])
            ->update($data);
    }

    public static function cartPayment($data){
        // dd($data);
        DB::table('transeection_sponshopping')->insert($data);
    }

    public static function cartPaymentUpdate($data){
        // dd($data);
        DB::table('transeection_sponshopping')
            ->where('transeection_id', $data['transeection_id'])
            ->update($data);
    }

    public static function transeectionPaymentUpdate($data){
        // dd($data);
        DB::table('transeection_sponshopping')
            ->where('transeection_invoice', $data['transeection_invoice'])
            ->update($data);
    }
}
