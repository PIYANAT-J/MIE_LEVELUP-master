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

    public static function InsertAndUpdateData($data){
        $value = DB::table('games')->where('USER_EMAIL', $data['USER_EMAIL'])->get();
        if($value->count() == 0){
            DB::table('games')->insert($data);
            return 1;
        }else{
            DB::table('games')
                ->where('USER_EMAIL', $data['USER_EMAIL'])
                ->update($data);
            return 0;
        }
     
    }
}
