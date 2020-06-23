<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Follow extends Model
{
    public static function InsertFollow($data){
        DB::table('follows')->insert($data);
    }

    public static function deleteFollow($data){
        DB::table('follows')->where('FOLLOW_ID', '=', $data['FOLLOW_ID'])->delete();
    }
}