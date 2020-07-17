<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Redirect;
use Illuminate\Support\MessageBag;
// use Illuminate\Support\Facades\Input;

use Auth;

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
}
