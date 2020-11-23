<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Follow;

use Session;
use Auth;
use DB;

class FollowController extends Controller
{
    public function FollowMe(Request $request){
        if(isset(Auth::user()->id)){
            if(isset($request->gameType) || isset($request->RATED_ESRB) || isset($request->RATED_B_L)){
                $gameTypefilter = $request->gameType;
                $gameEsrbfilter = $request->RATED_ESRB;
                $gameBLfilter = $request->RATED_B_L;
                $game = explode(',', $request->gameType);
                $GamesAll = DB::table('games')
                                ->where('GAME_STATUS', 'อนุมัติ')
                                ->where(function($query) use ($game, $gameEsrbfilter, $gameBLfilter){
                                    if($game[0] != ""){
                                        $query->whereIn('GAME_TYPE', $game);
                                        if($gameEsrbfilter != null){
                                            $query->where('RATED_ESRB', $gameEsrbfilter);
                                            if($gameBLfilter != null){
                                                $query->where('RATED_B_L', $gameBLfilter);
                                            }
                                        }
                                    }else{
                                        if($gameEsrbfilter != null){
                                            $query->where('RATED_ESRB', $gameEsrbfilter);
                                            if($gameBLfilter != null){
                                                $query->where('RATED_B_L', $gameBLfilter);
                                            }
                                        }else{
                                            $query->where('RATED_B_L', $gameBLfilter);
                                        }
                                    }
                                })->get();
                $Follows = DB::table('follows')->where('follows.USER_ID', '=', Auth::user()->id)
                                ->join('games', 'games.GAME_ID', 'follows.GAME_ID')
                                ->where(function($query) use ($game, $gameEsrbfilter, $gameBLfilter){
                                    if($game[0] != ""){
                                        $query->whereIn('GAME_TYPE', $game);
                                        if($gameEsrbfilter != null){
                                            $query->where('RATED_ESRB', $gameEsrbfilter);
                                            if($gameBLfilter != null){
                                                $query->where('RATED_B_L', $gameBLfilter);
                                            }
                                        }
                                    }else{
                                        if($gameEsrbfilter != null){
                                            $query->where('RATED_ESRB', $gameEsrbfilter);
                                            if($gameBLfilter != null){
                                                $query->where('RATED_B_L', $gameBLfilter);
                                            }
                                        }else{
                                            $query->where('RATED_B_L', $gameBLfilter);
                                        }
                                    }
                                })->get();
                $Games = [];
                foreach($GamesAll as $GamesRating){
                    $i = 0;
                    $CommentAll = DB::table('comments')->where('GAME_ID', $GamesRating->GAME_ID)->get();
                    // dd($CommentAll);
                    if($CommentAll->count() == 0){
                        $count = 0;
                        array_push($Games, ([
                            'GAME_ID' => $GamesRating->GAME_ID,
                            'GAME_NAME' => $GamesRating->GAME_NAME,
                            'GAME_IMG_PROFILE' => $GamesRating->GAME_IMG_PROFILE,
                            'RATED_B_L' => $GamesRating->RATED_B_L,
                            'RATED_ESRB' => $GamesRating->RATED_ESRB,
                            'RATING' => $count
                        ]));
                    }else{
                        foreach($CommentAll as $rating){
                            $i = $i+$rating->RATING;
                        }
                        $count = $i/$CommentAll->count();
                        array_push($Games, ([
                            'GAME_ID' => $GamesRating->GAME_ID,
                            'GAME_NAME' => $GamesRating->GAME_NAME,
                            'GAME_IMG_PROFILE' => $GamesRating->GAME_IMG_PROFILE,
                            'RATED_B_L' => $GamesRating->RATED_B_L,
                            'RATED_ESRB' => $GamesRating->RATED_ESRB,
                            'RATING' => $count
                        ]));
                    }
                }
            }else{
                $GamesAll = DB::table('games')->where('GAME_STATUS', '=', 'อนุมัติ')->get();
                $Follows = DB::table('follows')->where('USER_ID', '=', Auth::user()->id)->get();
                $Games = [];
                foreach($GamesAll as $GamesRating){
                    $i = 0;
                    $CommentAll = DB::table('comments')->where('GAME_ID', $GamesRating->GAME_ID)->get();
                    // dd($CommentAll);
                    if($CommentAll->count() == 0){
                        $count = 0;
                        array_push($Games, ([
                            'GAME_ID' => $GamesRating->GAME_ID,
                            'GAME_NAME' => $GamesRating->GAME_NAME,
                            'GAME_IMG_PROFILE' => $GamesRating->GAME_IMG_PROFILE,
                            'RATED_B_L' => $GamesRating->RATED_B_L,
                            'RATED_ESRB' => $GamesRating->RATED_ESRB,
                            'RATING' => $count
                        ]));
                    }else{
                        foreach($CommentAll as $rating){
                            $i = $i+$rating->RATING;
                        }
                        $count = $i/$CommentAll->count();
                        array_push($Games, ([
                            'GAME_ID' => $GamesRating->GAME_ID,
                            'GAME_NAME' => $GamesRating->GAME_NAME,
                            'GAME_IMG_PROFILE' => $GamesRating->GAME_IMG_PROFILE,
                            'RATED_B_L' => $GamesRating->RATED_B_L,
                            'RATED_ESRB' => $GamesRating->RATED_ESRB,
                            'RATING' => $count
                        ]));
                    }
                }
            }
            // $Games = DB::table('games')->where('GAME_STATUS', '=', 'อนุมัติ')->get();
            // $Follows = DB::table('follows')->where('USER_ID', '=', Auth::user()->id)->get();
            if(Auth::user()->users_type == '1'){
                $guest_user = DB::table('guest_users')->where('USER_EMAIL', Auth::user()->email)->first();
                if(isset($request->gameType) || isset($request->RATED_ESRB) || isset($request->RATED_B_L)){
                    return view('game.game_follow', compact('Follows', 'Games', 'guest_user', 'gameTypefilter', 'gameEsrbfilter', 'gameBLfilter'));
                }
                return view('game.game_follow', compact('Follows', 'Games', 'guest_user'));
            }elseif(Auth::user()->users_type == '2'){
                $developer = DB::table('developers')->where('USER_EMAIL', Auth::user()->email)->first();
                if(isset($request->gameType) || isset($request->RATED_ESRB) || isset($request->RATED_B_L)){
                    return view('game.game_follow', compact('Follows', 'Games', 'developer', 'gameTypefilter', 'gameEsrbfilter', 'gameBLfilter'));
                }
                return view('game.game_follow', compact('Follows', 'Games', 'developer'));
            }elseif(Auth::user()->users_type == '3'){
                $sponsor = DB::table('sponsors')->where('USER_EMAIL', Auth::user()->email)->first();
                if(isset($request->gameType) || isset($request->RATED_ESRB) || isset($request->RATED_B_L)){
                    return view('game.game_follow', compact('Follows', 'Games', 'sponsor', 'gameTypefilter', 'gameEsrbfilter', 'gameBLfilter'));
                }
                return view('game.game_follow', compact('Follows', 'Games', 'sponsor'));
            }else{
                if(isset($request->gameType) || isset($request->RATED_ESRB) || isset($request->RATED_B_L)){
                    return view('game.game_follow', compact('Follows', 'Games', 'gameTypefilter', 'gameEsrbfilter', 'gameBLfilter'));
                }
                return view('game.game_follow', compact('Follows', 'Games'));
            }
        }
    }

    public function followGame(Request $request){
        if($request->input('submit') != null){

            if($request->input('FOLLOW_ID') != null){
                $FOLLOW_ID = $request->input('FOLLOW_ID');
                if($FOLLOW_ID != ''){
                    $data = array("FOLLOW_ID"=>$FOLLOW_ID);
                    $value = Follow::deleteFollow($data);
                }
            }else{
                $GAME_ID = $request->input('GAME_ID');
                $GAME_NAME = $request->input('GAME_NAME');
                $FOLLOW_DATE = $request->input('FOLLOW_DATE');
                $USER_ID = $request->input('USER_ID');

                if($GAME_ID != '' || $GAME_NAME != '' || $FOLLOW_DATE != '' || $USER_ID != ''){
                    $data = array("GAME_ID"=>$GAME_ID, "GAME_NAME"=>$GAME_NAME, "FOLLOW_DATE"=>$FOLLOW_DATE, "USER_ID"=>$USER_ID);

                    $value = Follow::InsertFollow($data);
                    if($value){
                        Session::flash('message','Insert successfully.');
                    }else{
                        Session::flash('message','Username already exists.');
                    }
                }
            }
        }
        return back()->with('success', 'Data Your files has been successfully added');
        // return redirect()->action('GameController@indexGame');
    }

    // public function anFollowGame(Request $req){
    //     if($req->input('submit') != null){
    //         $FOLLOW_ID = $req->input('FOLLOW_ID');
    //         if($FOLLOW_ID != ''){
    //             $data = array("FOLLOW_ID"=>$FOLLOW_ID);
    //             $value = Follow::deleteFollow($data);
    //         }
    //     }
    //     return back()->with('success', 'Data Your files has been successfully added');
    // }
}
