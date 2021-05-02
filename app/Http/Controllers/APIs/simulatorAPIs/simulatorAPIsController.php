<?php

namespace App\Http\Controllers\APIs\simulatorAPIs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\User;
use App\Simulator\ranking_trade;

class simulatorAPIsController extends Controller
{
    // APIs\simulatorAPIs\simulatorAPIsController@tradeAPIs
    public function tradeAPIs(Request $req){
        if($req->api_token != null){
            $user = User::where('api_token', hash('sha256' , decrypt($req->api_token)))->first();
            if($user != null){
                $ranking = ranking_trade::where('user_id', $user->id)->first();
                if($ranking != null){
                    ranking_trade::where('id', $ranking->id)->update(array('amount'=>$req->amount));
                }else{
                    $trade = new ranking_trade();
                    $trade->amount = $req->amount;
                    $trade->user_id = $user->id;
                    $trade->user_email = $user->email;
                    $trade->save();
                }
                $response = [
                    'message' => 'Successfully'
                ];
                return response()->json($response, 200);
            }
        }
        return response()->json(['error'=>'Unauthorised'], 401);
    }
}
