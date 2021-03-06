<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Download;

use Session;
use Auth;
use DB;

class DownloadController extends Controller
{
    // public function indexDonwload($GAME_ID){

    //     $downloadToFile = public_path('section/File_game');
    //     $gameFileName = DB::table('games')->where('GAME_ID', $GAME_ID)->value('GAME_FILE');
    //     $headers = ['Content-Type: application/zip'];

    //     return response()->download($downloadToFile, $gameFileName, $headers);

    // }

    public function downloadGame(Request $request){
        if ($request->input('submit') != null ){
    
            // Insert && Update (TABLE {{ donwloads }})
            // $id = DB::table('games')->where('GAME_ID', $GAME_ID)->value('GAME_FILE');
            $GAME_FILE = $request->input('GAME_FILE');
            $downloadFile = public_path('section/File_game/'.$GAME_FILE);

            $GAME_ID = $request->input('GAME_ID');
            $USER_ID = Auth::user()->id;
            $DOWNLOAD_DATE = $request->input('DOWNLOAD_DATE');

            if($GAME_ID != '' || $USER_ID != '' || $DOWNLOAD_DATE != ''){
                $data = array("GAME_ID"=>$GAME_ID, "USER_ID"=>$USER_ID, "DOWNLOAD_DATE"=>$DOWNLOAD_DATE);
    
                // Insert && Update
                $value = Download::InsertDownload($data);
                if($value){
                    Session::flash('message','Insert successfully.');
                }else{
                    Session::flash('message','Username already exists.');
                }
            }
            
        }
        return response()->download($downloadFile);
        // return redirect()->action('DownloadController@indexGame');
        // return back()->with('success', 'Data Your files has been successfully added');
    }
}
