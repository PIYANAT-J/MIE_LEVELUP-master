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
        // dd('userPass');
        $gameShalf = DB::table('downloads')->where('USER_ID', Auth::user()->id)->get();
        if($gameShalf->count() == 0){
            $guest_user = DB::table('guest_users')->where('USER_EMAIL', Auth::user()->email)->get();
            $userKyc = DB::table('kycs')->where('USER_EMAIL', Auth::user()->email)->first();
            return view('profile.password.userlvp_change_password', compact('guest_user', 'userKyc'));
        }else{
            $guest_user = DB::table('guest_users')->where('USER_EMAIL', Auth::user()->email)->get();
            $userKyc = DB::table('kycs')->where('USER_EMAIL', Auth::user()->email)->first();
            return view('profile.password.userlvp_change_password', compact('guest_user', 'userKyc'));
        }
    }

    public function passwordUserReset(Request $req){
        // dd('passwordUserReset');
        if($req->input('submit') != null){
            // dd($req);
            $validate = $req->validate([
                'old_password' => ['required', 'string', 'max:255'. Auth::user()->password],
                'password' => ['required', 
                                'string', 
                                'min:8',
                                'confirmed',
                                'regex:/^.*(?=.{3,})(?=.*[A-Z])(?=.*[a-z])(?=.*[!@#$%^_~])(?=.*[0-9])(?=.*[\d\x]).*$/'
                            ],
            ]);

            $user = Auth::user()->id;
            $password = $req->input('password');
            $old_password = $req->input('old_password');

            // dd($password);
            // if(Hash::check(Auth::user()->password, $old_password)){
            //     dd();
            // }
            
            $data = array("password"=>Hash::make($password));
            DB::table('users')->where('id',$user)->update($data);

            return Redirect::to('/user_change_password')->with("susee", "เปลี่ยนรหัสผ่านสำเร็จ");
        }
    }

    // public function passwordUserReset(Request $request, $token = null){
    //     return view('auth::passwords.reset')->with(
    //         ['token' => $token, 'email' => $request->email]
    //     );
    // }
}
