<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Download extends Model
{
    public static function InsertDownload($data){
        DB::table('downloads')->insert($data);
    }

    public static function deleteGame($data){
        DB::table('downloads')->where('DOWNLOAD_ID', '=', $data['DOWNLOAD_ID'])->delete();
    }
}
