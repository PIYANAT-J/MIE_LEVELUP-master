<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    // public static function getuserData($USER_ID){

    //     if($USER_ID == 0){
    //         $value = DB::table('games')->orderBy('USER_ID', 'asc')->get(); 
    //     }else{
    //         $value = DB::table('games')->where('USER_ID', $USER_ID)->first();
    //     }

    //     return $value;
        
    // }

    public static function InsertGame($data){
        DB::table('games')->insert($data);
     
    }

    public static function UpdateGame($data){
        DB::table('games')
            ->where('USER_EMAIL', $data['USER_EMAIL'])
            ->update($data);
        
    }
}
