<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Admin;

use DB;


class AdminController extends Controller
{
    public function indexAdmin(){
        $KYC = DB::table('kycs')->where('KYC_STATUS', 'รออนุมัติ')->get();
        $GAME = DB::table('games')->where('GAME_STATUS', 'รออนุมัติ')->get();
        return view('admin_lvp.user_management', compact('KYC', 'GAME'));
    }

    public function approveKyc(Request $request){
        if($request->input('submit') != null){
            $KYC_ID = $request->input('KYC_ID');
            $KYC_STATUS = $request->input('KYC_STATUS');
            $KYC_APPROVE_DATE = $request->input('KYC_APPROVE_DATE');
            $ADMIN_NAME = $request->input('ADMIN_NAME');
            if($KYC_ID != '' && $KYC_STATUS != '' && $KYC_APPROVE_DATE != '' && $ADMIN_NAME != ''){
                $data = array("KYC_ID"=>$KYC_ID, "KYC_STATUS"=>$KYC_STATUS, "KYC_APPROVE_DATE"=>$KYC_APPROVE_DATE, "ADMIN_NAME"=>$ADMIN_NAME);

                $value = Admin::ApproveKyc($data);
            }
        }
        return redirect()->action('AdminController@indexAdmin');
    }

    public function approveGame(Request $request){
        if($request->input('submit') != null){
            $GAME_ID = $request->input('GAME_ID');
            $GAME_STATUS = $request->input('GAME_STATUS');
            $GAME_APPROVE_DATE = $request->input('GAME_APPROVE_DATE');
            $ADMIN_NAME = $request->input('ADMIN_NAME');
            if($GAME_ID != '' && $GAME_STATUS != '' && $GAME_APPROVE_DATE != '' && $ADMIN_NAME != ''){
                $data = array("GAME_ID"=>$GAME_ID, "GAME_STATUS"=>$GAME_STATUS, "GAME_APPROVE_DATE"=>$GAME_APPROVE_DATE, "ADMIN_NAME"=>$ADMIN_NAME);

                $value = Admin::ApproveGame($data);
            }
        }
        return redirect()->action('AdminController@indexAdmin');
    }

    public function createAdmin(Request $request){
        if ($request->input('submit') != null ){

            $this->validate($request, [
                'name' => 'required', 'string', 'max:255',
                'surname' => 'required', 'string', 'max:255',
                'email' => 'required', 'string', 'email', 'max:255', 'unique:users',
                'password' => 'required', 'string','mimes:$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'min:8', 'confirmed',
                'users_type' => 'required', 'integer', 'max:3',
            ]);

            $name =$request->input('name');
            $surname =$request->input('surname');
            $email =$request->input('email');
            $password =$request->input('password');
            $users_type =$request->input('users_type');

            if($name != '' && $surname != '' && $email != '' && $password != '' && $users_type != ''){
                $data = array("name"=>$name, "surname"=>$surname, "email"=>$email, "password"=>Hash::make($password) ,"users_type"=>$users_type);

                $value = Admin::createAdmin($data);
            }
        }
        return redirect()->action('AdminController@indexAdmin');
    }
}
