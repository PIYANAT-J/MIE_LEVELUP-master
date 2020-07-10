<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;

use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use App\User;
use App\Developer;
use App\Guest_user;
use App\Sponsors;

use Redirect;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        // die('<per>'.print_r($data,1));

        // $validator = Validator::make($data, [
        //     'name' => ['required', 'string', 'max:255'],
        //     'surname' => ['required', 'string', 'max:255'],
        //     'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        //     'password' => ['required', 'string', 'min:8', 'confirmed'],
        //     'users_type' => ['required', 'integer', 'max:3'],
        // ]);

        // if($validator->fails()){
        //     return redirect()->back()->with(['email','55555']);
        // }
        
        // $validator->setAttributeNames([
        //     'name' => ['required', 'string', 'max:255'],
        //     'surname' => ['required', 'string', 'max:255'],
        //     'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        //     'password' => ['required', 'string', 'min:8', 'confirmed'],
        //     'users_type' => ['required', 'integer', 'max:3'],
        // ]);
        // dd($validator);
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'surname' => ['required', 'string', 'max:255'],
            'email' => 'required|^[\\w!#$%&*+/=?{}~^-]+(?:\\.[\\w!#$%&*+/=?{}~^-]+)*@(?:[a-zA-Z0-9-]+\\.)+[a-zA-Z]{2,6}$',
            // 'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'users_type' => ['required', 'integer', 'max:3'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    // protected function create(array $data)
    // {
        
    //     return User::create([
    //         'name' => $data['name'],
    //         'surname' => $data['surname'],
    //         'email' => $data['email'],
    //         'password' => Hash::make($data['password']),
    //         'users_type' => $data['users_type'],
    //     ]);

    // }

    public function create(array $dataR){
        // die('<per>'.print_r($dataR,1));
        if($dataR['users_type'] == 1){
            // if(isset($dataR['accept'])){
                $data = array("USER_EMAIL"=>$dataR['email']);
                $value = Guest_user::InsertAndUpdateData($data);
                return User::create([
                    'name' => $dataR['name'],
                    'surname' => $dataR['surname'],
                    'email' => $dataR['email'],
                    'password' => Hash::make($dataR['password']),
                    'users_type' => $dataR['users_type'],
                ]);
            // }
            
        }elseif($dataR['users_type'] == 2){
            if($dataR['accept_dev'] == "on"){
                $data = array("USER_EMAIL"=>$dataR['email']);
                $value = Developer::InsertAndUpdateData($data);
                return User::create([
                    'name' => $dataR['name'],
                    'surname' => $dataR['surname'],
                    'email' => $dataR['email'],
                    'password' => Hash::make($dataR['password']),
                    'users_type' => $dataR['users_type'],
                ]);
            }
            
        }elseif($dataR['users_type'] == 3){
            if($dataR['accept_spon'] == "on"){
                $data = array("USER_EMAIL"=>$dataR['email']);
                $value = Sponsors::InsertAndUpdateData($data);
                return User::create([
                    'name' => $dataR['name'],
                    'surname' => $dataR['surname'],
                    'email' => $dataR['email'],
                    'password' => Hash::make($dataR['password']),
                    'users_type' => $dataR['users_type'],
                ]);
            }
            
        }elseif($dataR['users_type'] == 0){
            return User::create([
                'name' => $dataR['name'],
                'surname' => $dataR['surname'],
                'email' => $dataR['email'],
                'password' => Hash::make($dataR['password']),
                'users_type' => $dataR['users_type'],
            ]);
        }
    }
}
