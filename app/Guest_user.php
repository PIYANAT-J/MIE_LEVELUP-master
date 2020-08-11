<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

use App\User;
use App\Kyc;

class Guest_user extends Model
{
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
            DB::table('kycs')->insert($data);
            return 1;
        }else{
            // die('<pre>'. print_r($data, 1));
            if(isset($data['GUEST_USERS_IMG'])){
                $guest_users = array('GUEST_USERS_TEL'=>$data['GUEST_USERS_TEL'], 'GUEST_USERS_ID_CARD'=>$data['GUEST_USERS_ID_CARD'], 'GUEST_USERS_IMG'=>$data['GUEST_USERS_IMG'], 
                                'GUEST_USERS_BIRTHDAY'=>$data['GUEST_USERS_BIRTHDAY'], 'GUEST_USERS_AGE'=>$data['GUEST_USERS_AGE'], 'GUEST_USERS_GENDER'=>$data['GUEST_USERS_GENDER'], 
                                'GUEST_USERS_ADDRESS'=>$data['GUEST_USERS_ADDRESS'], 'ZIPCODE_ID'=>$data['ZIPCODE_ID'], 'USER_ID'=>$data['USER_ID'], 'USER_EMAIL'=>$data['USER_EMAIL'], 
                                'DATE_CREATE'=>$data['DATE_CREATE'], 'DATE_MODIFY'=>$data['DATE_MODIFY']);
            }else{
                $guest_users = array('GUEST_USERS_TEL'=>$data['GUEST_USERS_TEL'], 'GUEST_USERS_ID_CARD'=>$data['GUEST_USERS_ID_CARD'],
                                'GUEST_USERS_BIRTHDAY'=>$data['GUEST_USERS_BIRTHDAY'], 'GUEST_USERS_AGE'=>$data['GUEST_USERS_AGE'], 'GUEST_USERS_GENDER'=>$data['GUEST_USERS_GENDER'], 
                                'GUEST_USERS_ADDRESS'=>$data['GUEST_USERS_ADDRESS'], 'ZIPCODE_ID'=>$data['ZIPCODE_ID'], 'USER_ID'=>$data['USER_ID'], 'USER_EMAIL'=>$data['USER_EMAIL'], 
                                'DATE_CREATE'=>$data['DATE_CREATE'], 'DATE_MODIFY'=>$data['DATE_MODIFY']);
            }
            
            DB::table('kycs')
                ->where('USER_EMAIL', $data['USER_EMAIL'])
                ->update(['KYC_ID_CARD'=>$data['GUEST_USERS_ID_CARD']]);
            // die('<pre>'. print_r($guest_users, 1));
            DB::table('guest_users')
                ->where('USER_EMAIL', $guest_users['USER_EMAIL'])
                ->update($guest_users);

            $user = array('updateData'=> true, 'name'=>$data['name'], 'surname'=>$data['surname']);
            DB::table('users')
                ->where('email', $data['USER_EMAIL'])
                ->update($user);
            return 0;
        }
     
    }
}
