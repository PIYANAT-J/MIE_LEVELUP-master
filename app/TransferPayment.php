<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransferPayment extends Model
{
    public static function Insert($data){
        DB::table('transfer_payments')->insert($data);
    }

    public static function Update($data){
        DB::table('transfer_payments')
            ->where('id', $data['id'])
            ->update($data);
    }
}
