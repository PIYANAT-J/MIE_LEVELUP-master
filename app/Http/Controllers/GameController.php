<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use DB;

use App\Game_imgae;
use App\Game;

class GameController extends Controller
{
    // public function indexGame(){
    //     $game_shelf = DB::tabel('games')
    //                         ->join('game_imgaes', 'games.GAME_ID', '=', 'game_imgaes.GAME_ID')
    //                         ->get();
    //     return view('profile.dev_profile');
    // }

    // public function indexGame(){
    //     $game_shelf = DB::select('select * from games');
    //     return view('profile.dev_profile', ['game_shelf' => $game_shelf]);
    // }

    // public function getIndex(){
    //     // $images = Images::orderBy('id','desc')->get();
    //     // $gameimg = DB::select('select * from game_imgaes');
    //     return view('profile.dev_profile');
    // }

    public function saveGameProfile(Request $request){
        if ($request->input('submit') != null ){
    
            // Insert && Update (TABLE {{ games }})
            if($request->has('GAME_FILE')){
                $upload = $request->file('GAME_FILE');
                $img_name = 'GAME_FILE_'.time().'.'.$upload->getClientOriginalExtension();
                $path = public_path('section/File_game');
                $upload->move($path, $img_name);

                $GAME_NAME = $request->input('GAME_NAME');
                $GAME_DESCRIPTION = $request->input('GAME_DESCRIPTION');
                $GAME_STATUS = $request->input('GAME_STATUS');
                $GAME_DATE = $request->input('GAME_DATE');
                $GAME_FILE = $img_name;
                $GAME_SIZE = $request->input('GAME_SIZE');
                $GAME_TYPE_ID = $request->input('GAME_TYPE_ID');
                $RATE_ID = $request->input('RATE_ID');
                $USER_ID = $request->input('USER_ID');
                $USER_EMAIL = $request->input('USER_EMAIL');

                if($GAME_NAME != '' || $GAME_DESCRIPTION != '' || $GAME_STATUS != '' || $GAME_DATE != '' || $GAME_FILE != '' || $GAME_SIZE != '' 
                    || $GAME_TYPE_ID != '' || $RATE_ID != '' || $USER_ID != '' || $USER_EMAIL != ''){
                    $data = array("GAME_NAME"=>$GAME_NAME, "GAME_DESCRIPTION"=>$GAME_DESCRIPTION, "GAME_STATUS"=>$GAME_STATUS, "GAME_DATE"=>$GAME_DATE, "GAME_FILE"=>$GAME_FILE, 
                                "GAME_SIZE"=>$GAME_SIZE, "GAME_TYPE_ID"=>$GAME_TYPE_ID, "RATE_ID"=>$RATE_ID, "USER_ID"=>$USER_ID, "USER_EMAIL"=>$USER_EMAIL);
        
                    // Insert && Update
                    $value = Game::InsertAndUpdateData($data);
                    // if($value){
                    //     Session::flash('message','Insert successfully.');
                    // }else{
                    //     Session::flash('message','Username already exists.');
                    // }

                    // $Game_id = DB::select('select GAME_ID from games where USER_ID');
                    $Game_id = DB::table('games')->where('USER_ID', $data['USER_ID'])->get();
                    $Game_id = DB::select('select GAME_ID from games')->where('USER_ID', $data['USER_ID'])->get();
                    
                    // Insert && Update (TABLE {{ games_img }})
                    if($request->has('GAME_IMG_NAME')){
                        $i = 0;
                        foreach($request->file('GAME_IMG_NAME') as $Game_img){
                            $img_name = 'GAME_IMG_'.time().'_'.$i.'.'.$Game_img->getClientOriginalExtension();
                            $path = public_path('section/picture_game');
                            $Game_img->move($path, $img_name);
        
                            // $data_img[] = $img_name;
        
                            // $GAME_IMG_NAME = json_encode($data_img);
                            $GAME_IMG_NAME = $img_name;
                            $GAME_ID = $Game_id;
        
                            if($GAME_IMG_NAME != '' || $GAME_ID != ''){
                                $data = array("GAME_IMG_NAME"=>$GAME_IMG_NAME, "GAME_ID"=>$GAME_ID);
                    
                                // Insert && Update
                                $value = Game_imgae::InsertAndUpdateData($data);
                            }
                            $i++;
                        }
                    }
                }
            }

            // if($request->has('GAME_IMG_NAME')){
            //     $i = 0;
            //     foreach($request->file('GAME_IMG_NAME') as $Game_img){
            //         $img_name = 'GAME_IMG_'.time().'_'.$i.'.'.$Game_img->getClientOriginalExtension();
            //         $path = public_path('section/picture_game');
            //         $Game_img->move($path, $img_name);

            //         // $data_img[] = $img_name;

            //         // $GAME_IMG_NAME = json_encode($data_img);
            //         $GAME_IMG_NAME = $img_name;
            //         $GAME_ID = $request->input('GAME_ID');

            //         if($GAME_IMG_NAME != '' || $GAME_ID != ''){
            //             $data = array("GAME_IMG_NAME"=>$GAME_IMG_NAME, "GAME_ID"=>$GAME_ID);
            
            //             // Insert && Update
            //             $value = Game_imgae::InsertAndUpdateData($data);
            //         }
            //         $i++;
            //     }
            // }
        }
        // return redirect()->action('GameController@getIndex');
        return back()->with('success', 'Data Your files has been successfully added');
    }
}
