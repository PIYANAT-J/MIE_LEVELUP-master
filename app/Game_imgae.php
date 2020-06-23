<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

use App\Game;

class Game_imgae extends Model
{
    public static function InsertAndUpdateData($data){
        DB::table('game_imgaes')->insert($data);
        // $value = DB::table('games')->where('USER_EMAIL', $data['USER_EMAIL'])->get();
        // if($value->count() == 0){
        //     DB::table('games')->insert($data);
        //     return 1;
        // }else{
        //     DB::table('games')
        //         ->where('USER_EMAIL', $data['USER_EMAIL'])
        //         ->update($data);
        //     return 0;
        // }
     
    }
}
