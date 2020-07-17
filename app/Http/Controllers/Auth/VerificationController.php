<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\VerifiesEmails;
use Illuminate\Http\Request;

use DB;
use App\User;

class VerificationController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Email Verification Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling email verification for any
    | user that recently registered with the application. Emails may also
    | be re-sent if the user didn't receive the original email message.
    |
    */

    use VerifiesEmails;

    /**
     * Where to redirect users after verification.
     *
     * @var string
     */
    protected $redirectTo = '/';

    public function verify(Request $req){
        $user = User::find($req->route('id'));
        if($user->hasVerifiedEmail()){
            return redirect($this->redirectPath());
        }

        // if ($req->user()->markEmailAsVerified()) {
        //     event(new Verified($req->user()));
        //     toastr()->success('Uw email is geverifiëerd', 'Gelukt!', ['timeOut' => 5000]);
        // }

        if($user->markEmailAsVerified()){
            event(new Verified($user));
        }
        return redirect($this->redirectPath())->with('verify', true);
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('signed')->only('verify');
        $this->middleware('throttle:6,1')->only('verify', 'resend');
    }
}
