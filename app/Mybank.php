<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use DB;

class Mybank extends Model
{
    public static function updateAndinsert($data){
        $count = DB::table('mybanks')->where('user_email', $data['user_email'])->get();
        if($count->count() == 0){
            DB::table('mybanks')->insert($data);
            return 0;
        }else{
            DB::table('mybanks')
            ->where('user_email', $data['user_email'])
            ->update($data);
            return 1;
        }
    }
}
