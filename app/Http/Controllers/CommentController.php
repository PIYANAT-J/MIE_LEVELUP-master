<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use DB;
use Auth;
use Session;

use App\Comment;

class CommentController extends Controller
{
    public function createComment(Request $request){
        if($request->input('submit') != null){
            $RATING = $request->input('RATING');
            $COMMENT = $request->input('COMMENT');
            $DATE = $request->input('COMMENT_DATE');
            $GAME = $request->input('GAME_ID');
            $USER = $request->input('USER_ID');
            $EMAIL = $request->input('USER_EMAIL');

            if($RATING != '' && $DATE != '' && $GAME != '' && $USER != '' && $EMAIL != ''){
                $data = array("RATING"=>$RATING, "COMMENT"=>$COMMENT, "COMMENT_DATE"=>$DATE, "GAME_ID"=>$GAME, "USER_ID"=>$USER, "USER_EMAIL"=>$EMAIL);

                // die('<pre>'. print_r($data, 1));

                $value = Comment::InsertAndUpdateData($data);
            }
        }
        // return redirect()->action('GameController@gameDetail', ['id' => $req->input('GAME_ID')]);
        return back()->with('success', 'Data Your files has been successfully added');
    }
}
