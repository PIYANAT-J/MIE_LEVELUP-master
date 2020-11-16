<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

use DB;
use Auth;
use Redirect;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = '/';
    
    public function userPass(){
        $guest_user = DB::table('guest_users')->where('USER_EMAIL', Auth::user()->email)->get();
        $userKyc = DB::table('kycs')->where('USER_EMAIL', Auth::user()->email)->first();
        $ranking = DB::table('ranking_trades')->where('USER_EMAIL', Auth::user()->email)->first();
        if($ranking != null){
            return view('profile.password.userlvp_change_password', compact('guest_user', 'userKyc', 'ranking'));
        }
        return view('profile.password.userlvp_change_password', compact('guest_user', 'userKyc'));
    }

    public function devPass(){
        $developer = DB::table('developers')->where('USER_EMAIL', Auth::user()->email)->get();
        $userKyc = DB::table('kycs')->where('USER_EMAIL', Auth::user()->email)->first();
        return view('profile.password.devlvp_change_password', compact('developer', 'userKyc'));
    }

    public function passwordUserReset(Request $req){
        if($req->input('submit') != null){
            $validate = $req->validate([
                'old_password' => ['required', 'string', 'min:8', 'max:255'. Auth::user()->password],
                'password' => ['required', 'string', 'min:8', 'regex:/^.*(?=.{3,})(?=.*[A-Z])(?=.*[a-z])(?=.*[!@#$%^_~])(?=.*[0-9])(?=.*[\d\x]).*$/'],
                'password_confirmation' => ['required', 'same:password', 'min:8'],
            ],
            [
                'old_password.required' => 'กรุณาระบุรหัสผ่านของคุณ',
                'old_password.min' => 'รหัสผ่านขั้นต่ำ 8 ตัว',

                'password.required' => 'กรุณาระบุรหัสผ่านของคุณ',
                'password.min' => 'รหัสผ่านขั้นต่ำ 8 ตัว',
                'password.regex' => 'ต้องประกอบด้วยตัวอักษร(A-Z,a-z,0-9 และ!@#$%^_~) อย่างละ 1 ตัว',

                'password_confirmation.required' => 'กรุณาระบุรหัสผ่านของคุณ',
                'password_confirmation.min' => 'รหัสผ่านขั้นต่ำ 8 ตัว',
                'password_confirmation.same' => 'รหัสผ่านไม่ตรงกัน',
            ]);

            $user = Auth::user()->id;
            $password = $req->input('password');
            $old_password = $req->input('old_password');
            
            $data = array("password"=>Hash::make($password));
            DB::table('users')->where('id',$user)->update($data);

            return response()->json(["susee" => "เปลี่ยนรหัสผ่านสำเร็จ"]);
        }
    }
}
