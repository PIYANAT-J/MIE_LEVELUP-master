<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use DB;

class Withdraw extends Model
{
    public static function insert($data){
        DB::table('withdraws')->insert($data);
    }
}
