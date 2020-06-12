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
    // public function IndexFollow(){
    //     $Follows = DB::table('follows')->where('USER_ID', '=', Auth::user()->id)->get();
    //     return view();
    // }

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
