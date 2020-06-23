<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public static function InsertAndUpdateData($data){
        $value = DB::table('comments')->where([['USER_ID', $data['USER_ID']], ['GAME_ID', $data['GAME_ID']]])->get();
        if($value->count() == 0){
            // die('<pre>'. print_r($data, 1));
            DB::table('comments')->insert($data);
            return 1;
        }else{
            DB::table('comments')
                ->where([['USER_ID', $data['USER_ID']], ['GAME_ID', $data['GAME_ID']]])
                ->update($data);
            return 0;
        }
    }
}