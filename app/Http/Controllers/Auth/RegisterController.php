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
        // dd($data);
        if($data['users_type'] == 1){
            return Validator::make($data, [
                'name' => ['required', 
                            'string', 
                            'max:255',
                            'regex:/^[.\D]*$/'
                        ],
                'surname' => ['required', 
                                'string', 
                                'max:255',
                                'regex:/^[.\D]*$/'
                            ],
                'email' => ['required', 
                            'string', 
                            'email', 
                            'max:255', 
                            'unique:users',
                            'regex:/^[a-zA-Z0-9._-]+@[a-zA-Z]+\.[com|co.th]{2,6}$/'
                        ],
                'password' => ['required', 
                                'string', 
                                'min:8',
                                'regex:/^.*(?=.{3,})(?=.*[A-Z])(?=.*[a-z])(?=.*[!@#$%^_~])(?=.*[0-9])(?=.*[\d\x]).*$/',
                                'confirmed'
                            ],
                'users_type' => ['required', 'integer', 'max:3'],
                'accept' => ['required'],
            ]);
        }elseif($data['users_type'] == 2){
            return Validator::make($data, [
                'name' => ['required', 
                            'string', 
                            'max:255',
                            'regex:/^[.\D]*$/'
                        ],
                'surname' => ['required', 
                                'string', 
                                'max:255',
                                'regex:/^[.\D]*$/'
                            ],
                'email' => ['required', 
                            'string', 
                            'email', 
                            'max:255', 
                            'unique:users',
                            'regex:/^[a-zA-Z0-9._-]+@[a-zA-Z]+\.[com|co.th]{2,6}$/'
                        ],
                'password' => ['required', 
                                'string', 
                                'min:8',
                                'regex:/^.*(?=.{3,})(?=.*[A-Z])(?=.*[a-z])(?=.*[!@#$%^_~])(?=.*[0-9])(?=.*[\d\x]).*$/',
                                'confirmed'
                            ],
                'users_type' => ['required', 'integer', 'max:3'],
                'accept_dev' => ['required'],
            ]);
        }elseif($data['users_type'] == 3){
            return Validator::make($data, [
                'name' => ['required', 
                            'string', 
                            'max:255',
                            'regex:/^[.\D]*$/'
                        ],
                'surname' => ['required', 
                                'string', 
                                'max:255',
                                'regex:/^[.\D]*$/'
                            ],
                'email' => ['required', 
                            'string', 
                            'email', 
                            'max:255', 
                            'unique:users',
                            'regex:/^[a-zA-Z0-9._-]+@[a-zA-Z]+\.[com|co.th]{2,6}$/'
                        ],
                'password' => ['required', 
                                'string', 
                                'min:8',
                                'regex:/^.*(?=.{3,})(?=.*[A-Z])(?=.*[a-z])(?=.*[!@#$%^_~])(?=.*[0-9])(?=.*[\d\x]).*$/',
                                'confirmed'
                            ],
                'users_type' => ['required', 'integer', 'max:3'],
                'accept_spon' => ['required'],
            ]);
        }elseif($data['users_type'] == 0){
            return Validator::make($data, [
                'name' => ['required', 
                            'string', 
                            'max:255',
                            'regex:/^[.\D]*$/'
                        ],
                'surname' => ['required', 
                                'string', 
                                'max:255',
                                'regex:/^[.\D]*$/'
                            ],
                'email' => ['required', 
                            'string', 
                            'email', 
                            'max:255', 
                            'unique:users',
                            'regex:/^[a-zA-Z0-9._-]+@[a-zA-Z]+\.[com|co.th]{2,6}$/'
                        ],
                'password' => ['required', 
                                'string', 
                                'min:8',
                                'regex:/^.*(?=.{3,})(?=.*[A-Z])(?=.*[a-z])(?=.*[!@#$%^_~])(?=.*[0-9])(?=.*[\d\x]).*$/',
                                'confirmed'
                            ],
                'users_type' => ['required', 'integer', 'max:3'],
            ]);
        }
        
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
            $data = array("USER_EMAIL"=>$dataR['email'],"AVATAR"=>'[
                {
                    "eyes": "home/avatar/eyes/man/eyes_man_01.png",
                    "hair": "home/avatar/hair/man/hair_man_01.png",
                    "armor": "home/avatar/other/noneImg.png",
                    "crown": "home/avatar/other/noneImg.png",
                    "gender": "",
                    "gloves": "home/avatar/other/noneImg.png",
                    "weapon": "home/avatar/weapon/noneImg.png",
                    "clothes": "home/avatar/clothes/man/clothes_man_01.png",
                    "glasses": "home/avatar/glasses/noneImg.png"
                }
            ]');
            // dd($data);
            $value = Guest_user::InsertAndUpdateData($data);
            return User::create([
                'name' => $dataR['name'],
                'surname' => $dataR['surname'],
                'email' => $dataR['email'],
                'password' => Hash::make($dataR['password']),
                'users_type' => $dataR['users_type'],
            ]);
            
        }elseif($dataR['users_type'] == 2){
            $data = array("USER_EMAIL"=>$dataR['email']);
            $value = Developer::InsertAndUpdateData($data);
            return User::create([
                'name' => $dataR['name'],
                'surname' => $dataR['surname'],
                'email' => $dataR['email'],
                'password' => Hash::make($dataR['password']),
                'users_type' => $dataR['users_type'],
            ]);
            
        }elseif($dataR['users_type'] == 3){
            $data = array("USER_EMAIL"=>$dataR['email']);
            $value = Sponsors::InsertAndUpdateData($data);
            return User::create([
                'name' => $dataR['name'],
                'surname' => $dataR['surname'],
                'email' => $dataR['email'],
                'password' => Hash::make($dataR['password']),
                'users_type' => $dataR['users_type'],
            ]);
            
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
