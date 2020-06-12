<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use DB;
use Auth;
use File;
use Session;

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

    public function indexGame(){
        // if(Auth::user()->users_type == 0){
        //     return view('admin_lvp.user_management');
        // }else{
            // $Game = DB::select('SELECT * FROM developers LEFT JOIN games ON developers.USER_ID = games.USER_ID LEFT JOIN users ON developers.USER_ID = users.id');
            // return view('welcome', ['Game'=> $Game]);
        // }
        if(isset(Auth::user()->id)){
            $Games = DB::table('games')->where('GAME_STATUS', '=', 'อนุมัติ')->get();
            $Follows = DB::table('follows')->where('USER_ID', '=', Auth::user()->id)->get();
            $GamesNew = DB::table('games')->where('GAME_STATUS', '=', 'อนุมัติ')->orderBy('GAME_APPROVE_DATE', 'desc')->limit('10')->get();
            // die('<pre>'. print_r($Follows, 1));
            return view('welcome', compact('Games', 'Follows', 'GamesNew'));

        }else{
            $Games = DB::table('games')->where('GAME_STATUS', '=', 'อนุมัติ')->get();
            $GamesNew = DB::table('games')->where('GAME_STATUS', '=', 'อนุมัติ')->orderBy('GAME_APPROVE_DATE', 'desc')->limit('10')->get();
            // $Follows = DB::table('follows')->where('USER_ID', '=', Auth::user()->id)->get();
            return view('welcome', compact('Games', 'GamesNew'));

        }
    }

    public function gameDetail($gameId){
        if(isset(Auth::user()->id)){
            $Detail = DB::table('games')->where('GAME_ID', '=', $gameId)
                        ->join('users', 'users.id', '=', 'games.USER_ID')
                        ->select('games.*', 'users.name','surname')
                        ->get();
            $FollowDetail = DB::table('follows')->where([['GAME_ID', '=', $gameId],['USER_ID', '=', Auth::user()->id]])
                            // ->join('users', 'users.id', '=', 'follows.USER_ID')
                            // ->select('follows.*', 'users.users_type')
                            ->first();
            $Download = DB::table('downloads')->where([['GAME_ID', '=', $gameId],['USER_ID', '=', Auth::user()->id]])->first();
            return view('game.game_detail', compact('Detail', 'FollowDetail', 'Download'));

        }else{
            $Detail = DB::table('games')->where('GAME_ID', '=', $gameId)
                        ->join('users', 'users.id', '=', 'games.USER_ID')
                        ->select('games.*', 'users.name','surname')
                        ->get();
            return view('game.game_detail', compact('Detail'));
        }

        // $Detail = DB::table('games')->where('GAME_ID', '=', $gameId)
        //                 ->join('users', 'users.id', '=', 'games.USER_ID')
        //                 ->select('games.*', 'users.name','surname')
        //                 ->get();
        // $FollowDetail = DB::table('follows')->where([['GAME_ID', '=', $gameId],['USER_ID', '=', Auth::user()->id]])
        //                 // ->join('users', 'users.id', '=', 'follows.USER_ID')
        //                 // ->select('follows.*', 'users.users_type')
        //                 ->first();
        // $Download = DB::table('downloads')->where([['GAME_ID', '=', $gameId],['USER_ID', '=', Auth::user()->id]])->first();
        // return view('game.game_detail', compact('Detail', 'FollowDetail', 'Download'));
    }

    // public function getIndex(){
    //     // $images = Images::orderBy('id','desc')->get();
    //     // $gameimg = DB::select('select * from game_imgaes');
    //     return view('profile.dev_profile');
    // }

    // public function GameDev(){
    //     // $game_shelf = DB::tabel('games')
    //     //             ->join('game_imgaes', 'games.GAME_ID', '=', 'game_imgaes.GAME_ID')
    //     //             ->get();
    //     // return view('profile.dev_profile');

    //     $game_shelf = DB::select('select * from games');
    //     return view('profile.dev_profile', ['game_shelf' => $game_shelf]);

    // }

    public function saveGameProfile(Request $request){
        if ($request->input('submit') != null ){
    
            // Insert && Update (TABLE {{ games }})
            if($request->has('GAME_FILE')){
                $uploadFile = $request->file('GAME_FILE');
                $file_name = 'GAME_FILE_'.time().'.'.$uploadFile->getClientOriginalExtension();
                // $file_size = File::size($file_name);
                $pathFile = public_path('section/File_game');
                $uploadFile->move($pathFile, $file_name);

                $file_size = File::size(public_path('section/File_game/'.$file_name));

                $units = array('B', 'KB', 'MB', 'GB', 'TB'); 
                $base = log($file_size, 1024);
                // $file_size = max($file_size, 0); 
                // $pow = floor(($file_size ? log($file_size) : 0) / log(1024)); 
                // $pow = min($pow, count($units) - 1); 

                // Uncomment one of the following alternatives
                // $bytes /= pow(1024, $pow);
                // $bytes /= (1 << (10 * $pow)); 

                // $size = round($file_size, ) . ' ' . $units[$pow]; 
                $size = round(pow(1024, $base - floor($base)), $precision = 2) .' '. $units[floor($base)];
                
                if($request->has('GAME_IMG_PROFILE')){

                    $uploadImg = $request->file('GAME_IMG_PROFILE');
                    $img_name = 'GAME_IMG_PROFILE_'.time().'.'.$uploadImg->getClientOriginalExtension();
                    $pathImg = public_path('section/File_game/Profile_game');
                    $uploadImg->move($pathImg, $img_name);

                    $GAME_NAME = $request->input('GAME_NAME');
                    $GAME_IMG_PROFILE = $img_name;
                    $GAME_DESCRIPTION = $request->input('GAME_DESCRIPTION');
                    // $GAME_STATUS = $request->input('GAME_STATUS');
                    $GAME_DATE = $request->input('GAME_DATE');
                    $GAME_FILE = $file_name;
                    $GAME_SIZE = $size;
                    $GAME_VDO_LINK = $request->input('GAME_VDO_LINK');
                    $GAME_TYPE_ID = $request->input('GAME_TYPE_ID');
                    $RATE_ID = $request->input('RATE_ID');
                    $USER_ID = $request->input('USER_ID');
                    $USER_EMAIL = $request->input('USER_EMAIL');

                    if($GAME_NAME != '' || $GAME_IMG_PROFILE != '' || $GAME_DESCRIPTION != '' || $GAME_DATE != '' || $GAME_FILE != '' || $GAME_SIZE != '' || $GAME_VDO_LINK != ''
                        || $GAME_TYPE_ID != '' || $RATE_ID != '' || $USER_ID != '' || $USER_EMAIL != ''){
                        $data = array("GAME_NAME"=>$GAME_NAME, "GAME_IMG_PROFILE"=>$GAME_IMG_PROFILE, "GAME_DESCRIPTION"=>$GAME_DESCRIPTION, "GAME_DATE"=>$GAME_DATE, "GAME_FILE"=>$GAME_FILE, 
                                        "GAME_SIZE"=>$GAME_SIZE, "GAME_VDO_LINK"=>$GAME_VDO_LINK, "GAME_TYPE_ID"=>$GAME_TYPE_ID, "RATE_ID"=>$RATE_ID, "USER_ID"=>$USER_ID, "USER_EMAIL"=>$USER_EMAIL);
            
                        // Insert && Update
                        $value = Game::InsertGame($data);
                        if($value){
                            Session::flash('message','Insert successfully.');
                        }else{
                            Session::flash('message','Username already exists.');
                        }

                        $Game_id = DB::table('games')->where('USER_ID', $USER_ID)->value('GAME_ID');
                        
                        // Insert && Update (TABLE {{ games_img }})
                        if($request->has('GAME_IMG_NAME')){
                            $i = 0;
                            foreach($request->file('GAME_IMG_NAME') as $Game_img){
                                $img_game = 'GAME_IMG_'.time().'_'.$i.'.'.$Game_img->getClientOriginalExtension();
                                $pathImgGame = public_path('section/picture_game/Game_Img');
                                $Game_img->move($pathImgGame, $img_game);
            
                                $GAME_IMG_NAME = $img_game;
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
            }
        }
        // return redirect()->action('GameController@saveGameImg', );
        return back()->with('success', 'Data Your files has been successfully added');
    }
}
