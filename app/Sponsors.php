<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

use App\User;

class Sponsors extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'SPON_TEL', 
        'SPON_ID_CARD', 
        'SPON_IMG', 
        'SPON_BIRTHDAY', 
        'SPON_AGE', 
        'SPON_GENDER', 
        'SPON_ADDRESS', 
        'ZIPCODE_ID', 
        'USER_ID', 
        'USER_EMAIL',
    ];

    public static function InsertAndUpdateData($USER_EMAIL,$data){
        $value = DB::table('sponsors')->where('USER_EMAIL', $data['USER_EMAIL'])->get();
        if($value->count() == 0){
            DB::table('sponsors')->insert($data);

            DB::table('users')
                ->where('email', $data['USER_EMAIL'])
                ->update(['updateData'=> true]);
            return 1;
        }else{
            DB::table('sponsors')
                ->where('USER_EMAIL', $USER_EMAIL)
                ->update($data);
            return 0;
        }
     
    }
}