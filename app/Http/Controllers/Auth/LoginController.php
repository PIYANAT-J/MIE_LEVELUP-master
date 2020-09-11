<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Redirect;

use Socialite;
use Auth;
use Exception;
use App\User;
use App\Guest_user;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = RouteServiceProvider::HOME;
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request){   
        $input = $request->all();
   
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // $errors = new MessageBag;

        if(auth()->attempt(array('email' => $input['email'], 'password' => $input['password']))){
            // dd($input['password']);
            if (auth()->user()->users_type == 0) {
                return redirect()->route('AdminManagement');
            }else{
                return redirect()->route('LEVELup');
            }
        }

        return Redirect::to('/loginlvp')->with("email", "อีเมลหรือรหัสผ่านไม่ถูกต้อง");
          
    }

    public function redirectToFacebook() {
        return Socialite::driver('facebook')->redirect();
    }
    public function handleFacebookCallback() {
        try {
            $user = Socialite::driver('facebook')->user();
            $finduser = User::where('facebook_id', $user->id)->first();
            if ($finduser) {
                Auth::login($finduser);
                return redirect(route('LEVELup'));
            } else {
                $name = explode(' ', $user->name);
                $newUser = User::create(['name' => $name[0], 'surname' => $name[1], 'email' => $user->email, 'users_type' => '1', 'facebook_id' => $user->id]);

                $data = array("USER_EMAIL"=>$user->email);
                Guest_user::InsertAndUpdateData($data);

                Auth::login($newUser);
                
                return redirect(route('LEVELup'));
            }
        }
        catch(Exception $e) {
            return redirect('/loginlvp');
        }
    }

    public function redirectToGoogle() {
        return Socialite::driver('google')->redirect();
    }
    public function handleGoogleCallback() {
        try {
            $user = Socialite::driver('google')->user();
            $finduser = User::where('google_id', $user->id)->first();
            if ($finduser) {
                Auth::login($finduser);
                return redirect(route('LEVELup'));
            } else {
                $name = explode(' ', $user->name);
                $newUser = User::create(['name' => $name[0], 'surname' => $name[1], 'email' => $user->email, 'users_type' => '1', 'google_id' => $user->id]);

                $data = array("USER_EMAIL"=>$user->email);
                Guest_user::InsertAndUpdateData($data);
                
                Auth::login($newUser);

                return redirect(route('LEVELup'));
            }
        }
        catch(Exception $e) {
            return redirect('/loginlvp');
        }
    }
}
