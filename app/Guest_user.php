<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

use App\User;
use App\Kyc;

class Guest_user extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'GUEST_USERS_TEL', 
        'GUEST_USERS_ID_CARD', 
        'GUEST_USERS_IMG', 
        'GUEST_USERS_BIRTHDAY', 
        'GUEST_USERS_AGE', 
        'GUEST_USERS_GENDER', 
        'GUEST_USERS_ADDRESS', 
        'ZIPCODE_ID', 
        'USER_ID', 
        'USER_EMAIL',
    ];

    public static function getuserData($GUEST_USERS_ID = 0){

        if($GUEST_USERS_ID == 0){
            $value = DB::table('guest_users')->orderBy('GUEST_USERS_ID', 'asc')->get(); 
        }else{
            $value = DB::table('guest_users')->where('GUEST_USERS_ID', $GUEST_USERS_ID)->first();
        }

        return $value;
        
    }

    public static function InsertAndUpdateData($data){
        $value = DB::table('guest_users')->where('USER_EMAIL', $data['USER_EMAIL'])->get();
        if($value->count() == 0){
            DB::table('guest_users')->insert($data);

            // DB::table('users')
            //     ->where('email', $data['USER_EMAIL'])
            //     ->update(['updateData'=> true]);
            
            // $kyc = array('USER_EMAIL' => $data['USER_EMAIL']);
            DB::table('kycs')->insert($data);
            return 1;
        }else{
            DB::table('guest_users')
                ->where('USER_EMAIL', $data['USER_EMAIL'])
                ->update($data);
            
            DB::table('users')
                ->where('email', $data['USER_EMAIL'])
                ->update(['updateData'=> true]);
            return 0;
        }
     
    }
}
