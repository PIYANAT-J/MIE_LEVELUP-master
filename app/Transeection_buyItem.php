<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use DB;

class Transeection_buyItem extends Model
{
    public static function cartPaymentUpdate($data){
        // dd($data);
        DB::table('transeection_buy_items')
            ->where('transeection_id', $data['transeection_id'])
            ->update($data);
    }
}
