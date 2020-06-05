<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

use DB;

class Admin extends Model
{
    public static function ApproveKyc($data){
        DB::table('kycs')
                ->where('KYC_ID', $data['KYC_ID'])
                ->update(['KYC_STATUS' => $data['KYC_STATUS']], ['KYC_APPROVE_DATE' => $data['KYC_APPROVE_DATE']], ['ADMIN_NAME' => $data['ADMIN_NAME']]);
            return 0;
    }

    public static function ApproveGame($data){
        DB::table('games')
                ->where('GAME_ID', $data['GAME_ID'])
                ->update(['GAME_STATUS' => $data['GAME_STATUS']], ['GAME_APPROVE_DATE' => $data['GAME_APPROVE_DATE']], ['ADMIN_NAME' => $data['ADMIN_NAME']]);
            return 0;
    }

    public static function createAdmin($data){
        DB::table('users')->insert($data);
    }
}
