<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

use App\User;
use App\Kyc;

class Sponsors extends Model
{
    public static function InsertAndUpdateData($data){
        $value = DB::table('sponsors')->where('USER_EMAIL', $data['USER_EMAIL'])->get();
        if($value->count() == 0){
            DB::table('sponsors')->insert($data);
            return 1;
        }else{
            if(isset($data['SPON_IMG'])){
                $sponsor = array('SPON_TEL'=>$data['SPON_TEL'], 'SPON_ID_CARD'=>$data['SPON_ID_CARD'], 'SPON_IMG'=>$data['SPON_IMG'], 'taxID'=>$data['taxID'],
                                'SPON_BIRTHDAY'=>$data['SPON_BIRTHDAY'], 'SPON_AGE'=>$data['SPON_AGE'], 'SPON_GENDER'=>$data['SPON_GENDER'], 
                                'SPON_ADDRESS'=>$data['SPON_ADDRESS'], 'ZIPCODE_ID'=>$data['ZIPCODE_ID'], 'USER_ID'=>$data['USER_ID'], 'USER_EMAIL'=>$data['USER_EMAIL'], 
                                'DATE_CREATE'=>$data['DATE_CREATE'], 'DATE_MODIFY'=>$data['DATE_MODIFY'],'province'=>$data['province'],'amphure'=>$data['amphure'],'district'=>$data['district']);
            }else{
                $sponsor = array('SPON_TEL'=>$data['SPON_TEL'], 'SPON_ID_CARD'=>$data['SPON_ID_CARD'], 'taxID'=>$data['taxID'],
                                'SPON_BIRTHDAY'=>$data['SPON_BIRTHDAY'], 'SPON_AGE'=>$data['SPON_AGE'], 'SPON_GENDER'=>$data['SPON_GENDER'], 
                                'SPON_ADDRESS'=>$data['SPON_ADDRESS'], 'ZIPCODE_ID'=>$data['ZIPCODE_ID'], 'USER_ID'=>$data['USER_ID'], 'USER_EMAIL'=>$data['USER_EMAIL'], 
                                'DATE_CREATE'=>$data['DATE_CREATE'], 'DATE_MODIFY'=>$data['DATE_MODIFY'],'province'=>$data['province'],'amphure'=>$data['amphure'],'district'=>$data['district']);
            }
            // dd($sponsor);
            DB::table('sponsors')
                ->where('USER_EMAIL', $sponsor['USER_EMAIL'])
                ->update($sponsor);

            $user = array('updateData'=> true, 'name'=>$data['name'], 'surname'=>$data['surname']);
            DB::table('users')
                ->where('email', $data['USER_EMAIL'])
                ->update($user);
            return 0;
        }
    }
    public static function productData($data){
        DB::table('products')->insert($data);
    }
}
