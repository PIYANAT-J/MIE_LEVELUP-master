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
    public function indexGame(){
        if(isset(Auth::user()->id)){
            if(Auth::user()->users_type == '1'){
                $guest_user = DB::table('guest_users')->where('USER_EMAIL', Auth::user()->email)->first();
                $Games = DB::table('games')->where('GAME_STATUS', '=', 'อนุมัติ')->get();
                $Follows = DB::table('follows')->where('USER_ID', '=', Auth::user()->id)->get();
                $GamesNew = DB::table('games')->where('GAME_STATUS', '=', 'อนุมัติ')->orderBy('GAME_APPROVE_DATE', 'desc')->limit('10')->get();
                $CDownload = DB::table('downloads')->select(DB::raw('count(*) as downloads_count, GAME_ID'))
                                ->groupBy('GAME_ID')
                                ->get();
                $Com_count = DB::table('comments')->select(DB::raw('count(*) as com_count, GAME_ID'))
                                ->groupBy('GAME_ID')
                                ->get();
                $CommentAll = DB::table('comments')->get();
                $GameList = DB::table('comments')->where('comments.RATING', '>=', '4')
                                ->join('games', 'comments.GAME_ID', 'games.GAME_ID')
                                ->select('games.*', 'comments.RATING')
                                ->get();

                $game_id = array();
                $game_RATING = array();
                $Gamehot = [];
                foreach($GameList as $game){
                    $game_id[] = $game->GAME_ID;
                    $game_list = array_unique($game_id);
                }
                for($i=0;$i < count($game_list); $i++){
                    $Gamehot[$i] = DB::table('comments')->where('comments.GAME_ID', $game_list[$i])
                                    ->join('games', 'comments.GAME_ID', 'games.GAME_ID')
                                    ->select('games.*', 'comments.RATING')
                                    ->first();
                }
                return view('welcome', compact('Games', 'Follows', 'GamesNew', 'CDownload', 'Com_count', 'CommentAll', 'guest_user', 'Gamehot'));
            }elseif(Auth::user()->users_type == '2'){
                $developer = DB::table('developers')->where('USER_EMAIL', Auth::user()->email)->first();
                $Games = DB::table('games')->where('GAME_STATUS', '=', 'อนุมัติ')->get();
                $Follows = DB::table('follows')->where('USER_ID', '=', Auth::user()->id)->get();
                $GamesNew = DB::table('games')->where('GAME_STATUS', '=', 'อนุมัติ')->orderBy('GAME_APPROVE_DATE', 'desc')->limit('10')->get();
                $CDownload = DB::table('downloads')->select(DB::raw('count(*) as downloads_count, GAME_ID'))
                                ->groupBy('GAME_ID')
                                ->get();
                $Com_count = DB::table('comments')->select(DB::raw('count(*) as com_count, GAME_ID'))
                                ->groupBy('GAME_ID')
                                ->get();
                $CommentAll = DB::table('comments')->get();
                $GameList = DB::table('comments')->where('comments.RATING', '>=', '4')
                                ->join('games', 'comments.GAME_ID', 'games.GAME_ID')
                                ->select('games.*', 'comments.RATING')
                                ->get();

                $game_id = array();
                $game_RATING = array();
                $Gamehot = [];
                foreach($GameList as $game){
                    $game_id[] = $game->GAME_ID;
                    $game_list = array_unique($game_id);
                }
                for($i=0;$i < count($game_list); $i++){
                    $Gamehot[$i] = DB::table('comments')->where('comments.GAME_ID', $game_list[$i])
                                    ->join('games', 'comments.GAME_ID', 'games.GAME_ID')
                                    ->select('games.*', 'comments.RATING')
                                    ->first();
                }
                return view('welcome', compact('Games', 'Follows', 'GamesNew', 'CDownload', 'Com_count', 'CommentAll', 'developer', 'Gamehot'));
            }elseif(Auth::user()->users_type == '3'){
                $sponsor = DB::table('sponsors')->where('USER_EMAIL', Auth::user()->email)->first();
                $Games = DB::table('games')->where('GAME_STATUS', '=', 'อนุมัติ')->get();
                $Follows = DB::table('follows')->where('USER_ID', '=', Auth::user()->id)->get();
                $GamesNew = DB::table('games')->where('GAME_STATUS', '=', 'อนุมัติ')->orderBy('GAME_APPROVE_DATE', 'desc')->limit('10')->get();
                $CDownload = DB::table('downloads')->select(DB::raw('count(*) as downloads_count, GAME_ID'))
                                ->groupBy('GAME_ID')
                                ->get();
                $Com_count = DB::table('comments')->select(DB::raw('count(*) as com_count, GAME_ID'))
                                ->groupBy('GAME_ID')
                                ->get();
                $CommentAll = DB::table('comments')->get();
                $GameList = DB::table('comments')->where('comments.RATING', '>=', '4')
                                ->join('games', 'comments.GAME_ID', 'games.GAME_ID')
                                ->select('games.*', 'comments.RATING')
                                ->get();

                $game_id = array();
                $game_RATING = array();
                $Gamehot = [];
                foreach($GameList as $game){
                    $game_id[] = $game->GAME_ID;
                    $game_list = array_unique($game_id);
                }
                for($i=0;$i < count($game_list); $i++){
                    $Gamehot[$i] = DB::table('comments')->where('comments.GAME_ID', $game_list[$i])
                                    ->join('games', 'comments.GAME_ID', 'games.GAME_ID')
                                    ->select('games.*', 'comments.RATING')
                                    ->first();
                }
                return view('welcome', compact('Games', 'Follows', 'GamesNew', 'CDownload', 'Com_count', 'CommentAll', 'Gamehot', 'sponsor'));
            }else{
                $Games = DB::table('games')->where('GAME_STATUS', '=', 'อนุมัติ')->get();
                $Follows = DB::table('follows')->where('USER_ID', '=', Auth::user()->id)->get();
                $GamesNew = DB::table('games')->where('GAME_STATUS', '=', 'อนุมัติ')->orderBy('GAME_APPROVE_DATE', 'desc')->limit('10')->get();
                $CDownload = DB::table('downloads')->select(DB::raw('count(*) as downloads_count, GAME_ID'))
                                ->groupBy('GAME_ID')
                                ->get();
                $Com_count = DB::table('comments')->select(DB::raw('count(*) as com_count, GAME_ID'))
                                ->groupBy('GAME_ID')
                                ->get();
                $CommentAll = DB::table('comments')->get();
                $GameList = DB::table('comments')->where('comments.RATING', '>=', '4')
                                ->join('games', 'comments.GAME_ID', 'games.GAME_ID')
                                ->select('games.*', 'comments.RATING')
                                ->get();

                $game_id = array();
                $game_RATING = array();
                $Gamehot = [];
                foreach($GameList as $game){
                    $game_id[] = $game->GAME_ID;
                    $game_list = array_unique($game_id);
                }
                for($i=0;$i < count($game_list); $i++){
                    $Gamehot[$i] = DB::table('comments')->where('comments.GAME_ID', $game_list[$i])
                                    ->join('games', 'comments.GAME_ID', 'games.GAME_ID')
                                    ->select('games.*', 'comments.RATING')
                                    ->first();
                }
                return view('welcome', compact('Games', 'Follows', 'GamesNew', 'CDownload', 'Com_count', 'CommentAll', 'Gamehot'));
            }

        }else{
            $Games = DB::table('games')->where('GAME_STATUS', '=', 'อนุมัติ')->get();
            $GamesNew = DB::table('games')->where('GAME_STATUS', '=', 'อนุมัติ')->orderBy('GAME_APPROVE_DATE', 'desc')->limit('10')->get();
            $CDownload = DB::table('downloads')->select(DB::raw('count(*) as downloads_count, GAME_ID'))
                            ->groupBy('GAME_ID')
                            ->get();
            $Com_count = DB::table('comments')->select(DB::raw('count(*) as com_count, GAME_ID'))
                            ->groupBy('GAME_ID')
                            ->get();
            $CommentAll = DB::table('comments')->get();
            $GameList = DB::table('comments')->where('comments.RATING', '>=', '4')
                                ->join('games', 'comments.GAME_ID', 'games.GAME_ID')
                                ->select('games.*', 'comments.RATING')
                                ->get();

            $game_id = array();
            $game_RATING = array();
            $Gamehot = [];
            foreach($GameList as $game){
                $game_id[] = $game->GAME_ID;
                $game_list = array_unique($game_id);
            }
            for($i=0;$i < count($game_list); $i++){
                $Gamehot[$i] = DB::table('comments')->where('comments.GAME_ID', $game_list[$i])
                                ->join('games', 'comments.GAME_ID', 'games.GAME_ID')
                                ->select('games.*', 'comments.RATING')
                                ->first();
            }
            return view('welcome', compact('Games', 'GamesNew', 'CDownload', 'Com_count', 'CommentAll', 'Gamehot'));
        }
        
    }

    public function categoryGame(){
        if(isset(Auth::user()->id)){
            if(Auth::user()->users_type == '1'){
                $Games = DB::table('games')->where('GAME_STATUS', '=', 'อนุมัติ')->get();
                $Follows = DB::table('follows')->where('USER_ID', '=', Auth::user()->id)->get();
                $GamesNew = DB::table('games')->where('GAME_STATUS', '=', 'อนุมัติ')->orderBy('GAME_APPROVE_DATE', 'desc')->limit('10')->get();
                $CDownload = DB::table('downloads')->select(DB::raw('count(*) as downloads_count, GAME_ID'))
                                ->groupBy('GAME_ID')
                                ->get();
                $guest_user = DB::table('guest_users')->where('USER_EMAIL', Auth::user()->email)->first();
                return view('game.game_category', compact('Games', 'Follows', 'GamesNew', 'CDownload', 'guest_user'));
            }elseif(Auth::user()->users_type == '2'){
                $Games = DB::table('games')->where('GAME_STATUS', '=', 'อนุมัติ')->get();
                $Follows = DB::table('follows')->where('USER_ID', '=', Auth::user()->id)->get();
                $GamesNew = DB::table('games')->where('GAME_STATUS', '=', 'อนุมัติ')->orderBy('GAME_APPROVE_DATE', 'desc')->limit('10')->get();
                $CDownload = DB::table('downloads')->select(DB::raw('count(*) as downloads_count, GAME_ID'))
                                ->groupBy('GAME_ID')
                                ->get();
                $developer = DB::table('developers')->where('USER_EMAIL', Auth::user()->email)->first();
                // dd($developer);
                return view('game.game_category', compact('Games', 'Follows', 'GamesNew', 'CDownload', 'developer'));
            }elseif(Auth::user()->users_type == '3'){
                $Games = DB::table('games')->where('GAME_STATUS', '=', 'อนุมัติ')->get();
                $Follows = DB::table('follows')->where('USER_ID', '=', Auth::user()->id)->get();
                $GamesNew = DB::table('games')->where('GAME_STATUS', '=', 'อนุมัติ')->orderBy('GAME_APPROVE_DATE', 'desc')->limit('10')->get();
                $CDownload = DB::table('downloads')->select(DB::raw('count(*) as downloads_count, GAME_ID'))
                                ->groupBy('GAME_ID')
                                ->get();
                $sponsor = DB::table('sponsors')->where('USER_EMAIL', Auth::user()->email)->first();
                return view('game.game_category', compact('Games', 'Follows', 'GamesNew', 'CDownload', 'sponsor'));
            }else{
                $Games = DB::table('games')->where('GAME_STATUS', '=', 'อนุมัติ')->get();
                $Follows = DB::table('follows')->where('USER_ID', '=', Auth::user()->id)->get();
                $GamesNew = DB::table('games')->where('GAME_STATUS', '=', 'อนุมัติ')->orderBy('GAME_APPROVE_DATE', 'desc')->limit('10')->get();
                $CDownload = DB::table('downloads')->select(DB::raw('count(*) as downloads_count, GAME_ID'))
                                ->groupBy('GAME_ID')
                                ->get();
                return view('game.game_category', compact('Games', 'Follows', 'GamesNew', 'CDownload'));
            }
        }else{
            $Games = DB::table('games')->where('GAME_STATUS', '=', 'อนุมัติ')->get();
            $GamesNew = DB::table('games')->where('GAME_STATUS', '=', 'อนุมัติ')->orderBy('GAME_APPROVE_DATE', 'desc')->limit('10')->get();
            $CDownload = DB::table('downloads')->select(DB::raw('count(*) as downloads_count, GAME_ID'))
                            ->groupBy('GAME_ID')
                            ->get();
            return view('game.game_category', compact('Games', 'GamesNew', 'CDownload'));

        }
    }

    public function gameDetail($gameId){
        if(isset(Auth::user()->id)){
            if(Auth::user()->users_type == 1){
                $Detail = DB::table('games')->where('GAME_ID', '=', decrypt($gameId))
                            ->join('users', 'users.id', '=', 'games.USER_ID')
                            ->select('games.*', 'users.name','surname')
                            ->get();
                $FollowDetail = DB::table('follows')->where([['GAME_ID', '=', decrypt($gameId)],['USER_ID', '=', Auth::user()->id]])->first();
                $Download = DB::table('downloads')->where([['GAME_ID', '=', decrypt($gameId)],['USER_ID', '=', Auth::user()->id]])->first();
                $DownloadAll = DB::table('downloads')->where('GAME_ID', '=', decrypt($gameId))->get();
                $Comment = DB::table('comments')->where([['comments.GAME_ID', '=', decrypt($gameId)],['comments.USER_ID', '=', Auth::user()->id]])
                            ->join('guest_users', 'guest_users.USER_EMAIL', '=', 'comments.USER_EMAIL')
                            ->select('comments.*', 'guest_users.GUEST_USERS_IMG')
                            ->first();
                $CommentAll = DB::table('comments')->where('comments.GAME_ID', '=', decrypt($gameId))
                            ->join('users', 'users.id', '=', 'comments.USER_ID')
                            ->join('guest_users', 'guest_users.USER_EMAIL', '=', 'users.email')
                            ->select('comments.*', 'guest_users.GUEST_USERS_IMG', 'users.name','surname')
                            ->get();
                $guest_user = DB::table('guest_users')->where('USER_EMAIL', Auth::user()->email)->get();
                return view('game.game_detail', compact('Detail', 'FollowDetail', 'Download', 'DownloadAll', 'Comment', 'CommentAll', 'guest_user'));
            }elseif(Auth::user()->users_type == 2){
                $Detail = DB::table('games')->where('GAME_ID', '=', decrypt($gameId))
                            ->join('users', 'users.id', '=', 'games.USER_ID')
                            ->select('games.*', 'users.name','surname')
                            ->get();
                $FollowDetail = DB::table('follows')->where([['GAME_ID', '=', decrypt($gameId)],['USER_ID', '=', Auth::user()->id]])->first();
                $Download = DB::table('downloads')->where([['GAME_ID', '=', decrypt($gameId)],['USER_ID', '=', Auth::user()->id]])->first();
                $DownloadAll = DB::table('downloads')->where('GAME_ID', '=', decrypt($gameId))->get();
                $CommentAll = DB::table('comments')->where('comments.GAME_ID', '=', decrypt($gameId))
                            ->join('users', 'users.id', '=', 'comments.USER_ID')
                            ->join('guest_users', 'guest_users.USER_EMAIL', '=', 'users.email')
                            ->select('comments.*', 'guest_users.GUEST_USERS_IMG', 'users.name','surname')
                            ->get();
                $developer = DB::table('developers')->where('USER_EMAIL', Auth::user()->email)->get();
                return view('game.game_detail', compact('Detail', 'FollowDetail', 'Download', 'DownloadAll', 'CommentAll', 'developer'));
            }elseif(Auth::user()->users_type == 3){
                $Detail = DB::table('games')->where('GAME_ID', '=', decrypt($gameId))
                            ->join('users', 'users.id', '=', 'games.USER_ID')
                            ->select('games.*', 'users.name','surname')
                            ->get();
                $FollowDetail = DB::table('follows')->where([['GAME_ID', '=', decrypt($gameId)],['USER_ID', '=', Auth::user()->id]])->first();
                $Download = DB::table('downloads')->where([['GAME_ID', '=', decrypt($gameId)],['USER_ID', '=', Auth::user()->id]])->first();
                $DownloadAll = DB::table('downloads')->where('GAME_ID', '=', decrypt($gameId))->get();
                $CommentAll = DB::table('comments')->where('comments.GAME_ID', '=', decrypt($gameId))
                            ->join('users', 'users.id', '=', 'comments.USER_ID')
                            ->join('guest_users', 'guest_users.USER_EMAIL', '=', 'users.email')
                            ->select('comments.*', 'guest_users.GUEST_USERS_IMG', 'users.name','surname')
                            ->get();
                $sponsor = DB::table('sponsors')->where('USER_EMAIL', Auth::user()->email)->first();
                return view('game.game_detail', compact('Detail', 'FollowDetail', 'Download', 'DownloadAll', 'CommentAll', 'sponsor'));
            }else{
                $Detail = DB::table('games')->where('GAME_ID', '=', decrypt($gameId))
                        ->join('users', 'users.id', '=', 'games.USER_ID')
                        ->select('games.*', 'users.name','surname')
                        ->get();
                $CommentAll = DB::table('comments')->where('comments.GAME_ID', '=', decrypt($gameId))
                                ->join('users', 'users.id', '=', 'comments.USER_ID')
                                ->join('guest_users', 'guest_users.USER_EMAIL', '=', 'users.email')
                                ->select('comments.*', 'users.name','surname', 'guest_users.GUEST_USERS_IMG')
                                ->get();
                $DownloadAll = DB::table('downloads')->where('GAME_ID', '=', decrypt($gameId))->get();
                $guest_user = DB::table('guest_users')->where('USER_EMAIL', Auth::user()->email)->get();
                return view('game.game_detail', compact('Detail', 'CommentAll', 'DownloadAll', 'guest_user'));
            }
        }else{
            $Detail = DB::table('games')->where('GAME_ID', '=', decrypt($gameId))
                        ->join('users', 'users.id', '=', 'games.USER_ID')
                        ->select('games.*', 'users.name','surname')
                        ->get();
            $CommentAll = DB::table('comments')->where('comments.GAME_ID', '=', decrypt($gameId))
                            ->join('users', 'users.id', '=', 'comments.USER_ID')
                            ->join('guest_users', 'guest_users.USER_EMAIL', '=', 'users.email')
                            ->select('comments.*', 'users.name','surname', 'guest_users.GUEST_USERS_IMG')
                            ->get();
                            // die('<pre>'. print_r($CommentAll, 1));
            $DownloadAll = DB::table('downloads')->where('GAME_ID', '=', decrypt($gameId))->get();
            return view('game.game_detail', compact('Detail', 'CommentAll', 'DownloadAll'));
        }
    }

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
                $size = round(pow(1024, $base - floor($base)), $precision = 2) .' '. $units[floor($base)];
                
                if($request->has('GAME_IMG_PROFILE')){

                    $uploadImg = $request->file('GAME_IMG_PROFILE');
                    $img_name = 'GAME_IMG_PROFILE_'.time().'.'.$uploadImg->getClientOriginalExtension();
                    $pathImg = public_path('section/File_game/Profile_game');
                    $uploadImg->move($pathImg, $img_name);

                    $GAME_NAME = $request->input('GAME_NAME');
                    $GAME_IMG_PROFILE = $img_name;
                    $GAME_DESCRIPTION = $request->input('GAME_DESCRIPTION');
                    $GAME_DESCRIPTION_FULL = $request->input('GAME_DESCRIPTION_FULL');
                    // $GAME_STATUS = $request->input('GAME_STATUS');
                    $GAME_DATE = $request->input('GAME_DATE');
                    $GAME_FILE = $file_name;
                    $GAME_SIZE = $size;
                    $GAME_VDO_LINK = $request->input('GAME_VDO_LINK');
                    $GAME_TYPE = $request->input('GAME_TYPE');
                    $RATED_ESRB = $request->input('RATED_ESRB');
                    $RATED_B_L = $request->input('RATED_B_L');
                    $USER_ID = $request->input('USER_ID');
                    $USER_EMAIL = $request->input('USER_EMAIL');

                    if($GAME_NAME != '' || $GAME_IMG_PROFILE != '' || $GAME_DESCRIPTION != '' || $GAME_DESCRIPTION_FULL != '' || $GAME_DATE != '' || $GAME_FILE != '' || $GAME_SIZE != '' || $GAME_VDO_LINK != ''
                        || $GAME_TYPE != '' || $RATED_ESRB != '' || $USER_ID != '' || $RATED_B_L != '' || $USER_EMAIL != ''){
                        $data = array("GAME_NAME"=>$GAME_NAME, "GAME_IMG_PROFILE"=>$GAME_IMG_PROFILE, "GAME_DESCRIPTION"=>$GAME_DESCRIPTION, "GAME_DESCRIPTION_FULL"=>$GAME_DESCRIPTION_FULL, "GAME_DATE"=>$GAME_DATE, "GAME_FILE"=>$GAME_FILE, 
                                        "GAME_SIZE"=>$GAME_SIZE, "GAME_VDO_LINK"=>$GAME_VDO_LINK, "GAME_TYPE"=>$GAME_TYPE, "RATED_ESRB"=>$RATED_ESRB, "RATED_B_L"=>$RATED_B_L, "USER_ID"=>$USER_ID, "USER_EMAIL"=>$USER_EMAIL);
                        
                        // die('<pre>'. print_r($data, 1));
                        // Insert && Update
                        $value = Game::InsertGame($data);
                        if($value){
                            Session::flash('message','Insert successfully.');
                        }else{
                            Session::flash('message','Username already exists.');
                        }

                        $Game_id = DB::table('games')->where('GAME_NAME', $GAME_NAME)->value('GAME_ID');
                        
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
                                    
                                    // die('<pre>'. print_r($data, 1));
                                    // Insert && Update
                                    $value = Game_imgae::InsertAndUpdateData($data);
                                }
                                $i++;
                            }
                        }
                    }
                }else{
                    $GAME_NAME = $request->input('GAME_NAME');
                    $GAME_DESCRIPTION = $request->input('GAME_DESCRIPTION');
                    $GAME_DESCRIPTION_FULL = $request->input('GAME_DESCRIPTION_FULL');
                    // $GAME_STATUS = $request->input('GAME_STATUS');
                    $GAME_DATE = $request->input('GAME_DATE');
                    $GAME_FILE = $file_name;
                    $GAME_SIZE = $size;
                    $GAME_VDO_LINK = $request->input('GAME_VDO_LINK');
                    $GAME_TYPE = $request->input('GAME_TYPE');
                    $RATED_ESRB = $request->input('RATED_ESRB');
                    $RATED_B_L = $request->input('RATED_B_L');
                    $USER_ID = $request->input('USER_ID');
                    $USER_EMAIL = $request->input('USER_EMAIL');

                    if($GAME_NAME != '' || $GAME_DESCRIPTION != '' || $GAME_DESCRIPTION_FULL != '' || $GAME_DATE != '' || $GAME_FILE != '' || $GAME_SIZE != '' || $GAME_VDO_LINK != ''
                        || $GAME_TYPE != '' || $RATED_ESRB != '' || $USER_ID != '' || $RATED_B_L != '' || $USER_EMAIL != ''){
                        $data = array("GAME_NAME"=>$GAME_NAME, "GAME_DESCRIPTION"=>$GAME_DESCRIPTION, "GAME_DESCRIPTION_FULL"=>$GAME_DESCRIPTION_FULL, "GAME_DATE"=>$GAME_DATE, "GAME_FILE"=>$GAME_FILE, 
                                        "GAME_SIZE"=>$GAME_SIZE, "GAME_VDO_LINK"=>$GAME_VDO_LINK, "GAME_TYPE"=>$GAME_TYPE, "RATED_ESRB"=>$RATED_ESRB, "RATED_B_L"=>$RATED_B_L, "USER_ID"=>$USER_ID, "USER_EMAIL"=>$USER_EMAIL);
                        
                        // die('<pre>'. print_r($data, 1));
                        // Insert && Update
                        $value = Game::InsertGame($data);
                    }
                }
            }else{
                if($request->input('GAME_ID') != null){
                    $GAME_ID = $request->input('GAME_ID');
                    if($GAME_ID != ''){
                        $data = array("GAME_ID"=>$GAME_ID);
                        // die('<pre>'. print_r($data, 1));
                        $value = Game::deleteGame($data);
                    }
                }
            }
        }
        // return redirect()->action('GameController@saveGameImg', );
        return back()->with('success', 'Data Your files has been successfully added');
    }
}
