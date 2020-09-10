<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class Admin extends Model
{
    public static function ApproveKyc($data){
        // die('<pre>'. print_r($data, 1));
        DB::table('kycs')
                ->where('KYC_ID', $data['KYC_ID'])
                ->update($data);
            return 0;
    }

    public static function ApproveGame($data){
        DB::table('games')
                ->where('GAME_ID', $data['GAME_ID'])
                ->update($data);
            return 0;
        // ->update(['GAME_STATUS' => $data['GAME_STATUS']], ['GAME_APPROVE_DATE' => $data['GAME_APPROVE_DATE']], ['ADMIN_NAME' => $data['ADMIN_NAME']]);
    }

    public static function createAdmin($data){
        DB::table('users')->insert($data);
    }

    public static function appTransfer($data){
        DB::table('transfer_payments')
            ->where('id', $data['id'])
            ->update($data);
        return 0;
    }

    public static function approveWith($data){
        DB::table('withdraws')
            ->where('id', $data['id'])
            ->update($data);
        return 0;
    }

    public static function addPackage($data){
        DB::table('packages')->insert($data);
    }
}
