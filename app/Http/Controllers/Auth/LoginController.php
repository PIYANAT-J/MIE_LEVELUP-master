<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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

    // public function redirectTo()
    // {
    //     switch(Auth::user()->users_type){
    //         case 0:
    //             $this->redirectTo = '/user_mamagement';
    //             return $this->redirectTo;
    //             break;
    //         case 1:
    //             $this->redirectTo = '/';
    //             return $this->redirectTo;
    //             break;
    //         case 2:
    //             $this->redirectTo = '/';
    //             return $this->redirectTo;
    //             break;
    //         case 3:
    //             $this->redirectTo = '/';
    //             return $this->redirectTo;
    //             break;
    //         default:
    //             $this->redirectTo = '/login';
    //             return $this->redirectTo;
    //     }
         
    //     // return $next($request);
    // }

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
   
        if(auth()->attempt(array('email' => $input['email'], 'password' => $input['password'])))
        {
            if (auth()->user()->users_type == 0) {
                return redirect()->route('Admin');
            }else{
                return redirect()->route('LEVELup');
            }
        }else{
            return redirect()->route('login');
        }
          
    }
}
