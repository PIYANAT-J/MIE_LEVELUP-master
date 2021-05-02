<?php

namespace App\Http\Controllers\APIs\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use Session;
use Auth;

use App\User;
use App\Simulator\ranking_trade;

class LoginAPIsController extends Controller
{

    public function getUser(){
        // $user = User::where('email', Auth::user()->email)->first();
        return response()->json(['email' => Auth::user()->email]);
    }

    public function LoginAPIs(Request $req){
        $input = $req->all();
   
        $req->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ],[
            'email.required' => 'กรุณาระบุอีเมล',
            'email.email' => 'อีเมลไม่ถูกต้อง',

            'password.required' => 'กรุณาระบุรหัสผ่านของคุณ',       
        ]);

        if(auth()->attempt(array('email' => $input['email'], 'password' => $input['password']))){
            if (auth()->user()->users_type == 1) {
                $token = Str::random(80);
                $req->user()->forceFill([
                    'api_token' => hash('sha256', $token),
                ])->save();
                $amount = ranking_trade::where('user_id', auth()->user()->id)->first();
                if($amount == null){
                    $response = [
                        'api_token' => encrypt($token),
                        'username' => auth()->user()->name .' '. auth()->user()->surname,
                        'amount' => 500
                        
                    ];
                }else{
                    if($amount->amount <= 0){
                        $response = [
                            'api_token' => encrypt($token),
                            'username' => auth()->user()->name .' '. auth()->user()->surname,
                            'amount' => 500
                        ];
                    }else{
                        $response = [
                            'api_token' => encrypt($token),
                            'username' => auth()->user()->name .' '. auth()->user()->surname,
                            'amount' => $amount->amount
                        ];
                    }
                }
                return response()->json($response, 200);
            }
        }
        return response()->json(['error'=>'Unauthorised'], 401);
    }

    public function LogoutAPIs($api_token){
        if($api_token){
            $user = User::where('api_token', hash('sha256' , decrypt($api_token)))->update(array('api_token' => null));
            $response = [
                'message' => 'Successfully logged out'
            ];
            return response()->json($response, 200);
        }
        return response()->json(['error'=>'Unauthorised'], 401);
    }
}
