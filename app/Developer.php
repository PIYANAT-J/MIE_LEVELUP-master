<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

use App\User;
use App\Kyc;

class Developer extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'DEV_TEL', 
        'DEV_ID_CARD', 
        'DEV_IMG', 
        'DEV_BIRTHDAY', 
        'DEV_AGE', 
        'DEV_GENDER', 
        'DEV_ADDRESS', 
        'ZIPCODE_ID', 
        'USER_ID', 
        'USER_EMAIL',
    ];

    // public static function getuserData($DEV_ID = 0){

    //     if($DEV_ID == 0){
    //         $value = DB::table('developers')->orderBy('DEV_ID', 'asc')->get(); 
    //     }else{
    //         $value = DB::table('developers')->where('DEV_ID', $DEV_ID)->first();
    //     }

    //     return $value;
        
    // }
    
    // public static function insertData($data){
    //     $value = DB::table('developers')->where('USER_EMAIL', $data['USER_EMAIL'])->get();
    //     if($value->count() == 0){
    //         DB::table('developers')->insert($data);
    //         return 1;
    //     }else{
    //         return 0;
    //     }
     
    // }
    
    // public static function updateData($USER_EMAIL,$data){
    //     DB::table('developers')
    //         ->where('USER_EMAIL', $USER_EMAIL)
    //         ->update($data);
    // }
    
    // public static function deleteData($id){
    //     DB::table('users')->where('id', '=', $id)->delete();
    // }

    public static function InsertAndUpdateData($data){
        $value = DB::table('developers')->where('USER_EMAIL', $data['USER_EMAIL'])->get();
        if($value->count() == 0){
            DB::table('developers')->insert($data);

            // DB::table('users')
            //     ->where('email', $data['USER_EMAIL'])
            //     ->update(['updateData'=> true]);

            // $kyc = array('USER_ID' => $data['USER_ID'], 'USER_EMAIL' => $data['USER_EMAIL']);
            DB::table('kycs')->insert($data);
            return 1;
        }else{
            if(isset($data['DEV_IMG'])){
                $developer = array('DEV_TEL'=>$data['DEV_TEL'], 'DEV_ID_CARD'=>$data['DEV_ID_CARD'], 'DEV_IMG'=>$data['DEV_IMG'], 
                                'DEV_BIRTHDAY'=>$data['DEV_BIRTHDAY'], 'DEV_AGE'=>$data['DEV_AGE'], 'DEV_GENDER'=>$data['DEV_GENDER'], 
                                'DEV_ADDRESS'=>$data['DEV_ADDRESS'], 'ZIPCODE_ID'=>$data['ZIPCODE_ID'], 'USER_ID'=>$data['USER_ID'], 'USER_EMAIL'=>$data['USER_EMAIL'], 
                                'DATE_CREATE'=>$data['DATE_CREATE'], 'DATE_MODIFY'=>$data['DATE_MODIFY']);
            }else{
                $developer = array('DEV_TEL'=>$data['DEV_TEL'], 'DEV_ID_CARD'=>$data['DEV_ID_CARD'],
                                'DEV_BIRTHDAY'=>$data['DEV_BIRTHDAY'], 'DEV_AGE'=>$data['DEV_AGE'], 'DEV_GENDER'=>$data['DEV_GENDER'], 
                                'DEV_ADDRESS'=>$data['DEV_ADDRESS'], 'ZIPCODE_ID'=>$data['ZIPCODE_ID'], 'USER_ID'=>$data['USER_ID'], 'USER_EMAIL'=>$data['USER_EMAIL'], 
                                'DATE_CREATE'=>$data['DATE_CREATE'], 'DATE_MODIFY'=>$data['DATE_MODIFY']);
            }

            DB::table('kycs')
                ->where('USER_EMAIL', $data['USER_EMAIL'])
                ->update(['KYC_ID_CARD'=>$data['DEV_ID_CARD']]);

            DB::table('developers')
                ->where('USER_EMAIL', $developer['USER_EMAIL'])
                ->update($developer);

            $user = array('updateData'=> true, 'name'=>$data['name'], 'surname'=>$data['surname']);
            DB::table('users')
                ->where('email', $data['USER_EMAIL'])
                ->update($user);
            return 0;
        }
     
    }
}
