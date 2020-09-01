<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use DB;

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

    public static function gamePackage($data){
        DB::table('my_package_buy')
            ->where('packageBuy_invoice', $data['packageBuy_invoice'])
            ->update($data);
    }

    public static function cartGame($data){
        DB::table('sponsor_shopping_cart')->insert($data);
    }
}
