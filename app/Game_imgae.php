<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Game_imgae extends Model
{
    public static function InsertAndUpdateData($data){
        // $value = DB::table('game_imgaes')->where('GAME_ID', $data['GAME_ID'])->get();
        // if($value->count() == 0){
            DB::table('game_imgaes')->insert($data);
        //     return 1;
        // }else{
        //     DB::table('game_imgaes')
        //         ->where('GAME_ID', $data['GAME_ID'])
        //         ->update($data);
        //     return 0;
        // }
     
    }
}
