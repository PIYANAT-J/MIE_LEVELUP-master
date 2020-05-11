<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

use App\User;

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

    public static function getuserData($DEV_ID = 0){

        if($DEV_ID == 0){
            $value = DB::table('developers')->orderBy('DEV_ID', 'asc')->get(); 
        }else{
            $value = DB::table('developers')->where('DEV_ID', $DEV_ID)->first();
        }

        return $value;
        
    }
    
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

            DB::table('users')
                ->where('email', $data['USER_EMAIL'])
                ->update(['updateData'=> true]);
            return 1;
        }else{
            DB::table('developers')
                ->where('USER_EMAIL', $data['USER_EMAIL'])
                ->update($data);
            return 0;
        }
     
    }
}