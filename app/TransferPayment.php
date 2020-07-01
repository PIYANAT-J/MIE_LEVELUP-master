<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use DB;

class TransferPayment extends Model
{
    public static function insertTransfer($data){
        DB::table('transfer_payments')->insert($data);
        return 0;
    }

    public static function updateTransfer($data){
        DB::table('transfer_payments')
            ->where('id', $data['id'])
            ->update($data);
        return 0;
    }
}
