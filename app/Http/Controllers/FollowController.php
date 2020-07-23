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
    public function FollowMe(){
        if(isset(Auth::user()->id)){
            if(Auth::user()->users_type == '1'){
                $Follows = DB::table('follows')->where('USER_ID', '=', Auth::user()->id)->get();
                $Games = DB::table('games')->where('GAME_STATUS', '=', 'อนุมัติ')->get();
                $guest_user = DB::table('guest_users')->where('USER_EMAIL', Auth::user()->email)->get();
                return view('game.game_follow', compact('Follows', 'Games', 'guest_user'));
            }elseif(Auth::user()->users_type == '2'){
                $Follows = DB::table('follows')->where('USER_ID', '=', Auth::user()->id)->get();
                $Games = DB::table('games')->where('GAME_STATUS', '=', 'อนุมัติ')->get();
                $developer = DB::table('developers')->where('USER_EMAIL', Auth::user()->email)->first();
                // dd($developer);
                return view('game.game_follow', compact('Follows', 'Games', 'developer'));
            }elseif(Auth::user()->users_type == '3'){
                $Follows = DB::table('follows')->where('USER_ID', '=', Auth::user()->id)->get();
                $Games = DB::table('games')->where('GAME_STATUS', '=', 'อนุมัติ')->get();
                $spon = DB::table('sponsors')->where('USER_EMAIL', Auth::user()->email)->first();
                return view('game.game_follow', compact('Follows', 'Games', 'spon'));
            }else{
                $Follows = DB::table('follows')->where('USER_ID', '=', Auth::user()->id)->get();
                $Games = DB::table('games')->where('GAME_STATUS', '=', 'อนุมัติ')->get();
                return view('game.game_follow', compact('Follows', 'Games'));
            }
        }else{
            $Follows = DB::table('follows')->where('USER_ID', '=', Auth::user()->id)->get();
            $Games = DB::table('games')->where('GAME_STATUS', '=', 'อนุมัติ')->get();
            return view('game.game_follow', compact('Follows', 'Games'));

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
