<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class QrPayment extends Model
{
    public static function qrPayment($data){
        DB::tabel('qr_payments')->insert($data);
    }
}
