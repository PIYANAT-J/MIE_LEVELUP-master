<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Kyc;

use DB;
use Session;

class KycController extends Controller
{
    // public function indexGuest_user(){
    //     $guest_user = DB::select('select * from guest_users');
    //     return view('kyc', ['guest_user'=> $guest_user]);
    // }
    // public function index($type){
    //     if($type == 2){
    //         $developer = DB::select('select * from developers');
    //         return view('kyc', ['developer'=> $developer]);
    //     }elseif($type == 3){
    //         $sponsor = DB::select('select * from sponsors');
    //         return view('kyc', ['sponsor'=> $sponsor]);
    //     }else{
    //         $guest_user = DB::select('select * from guest_users');
    //         return view('kyc', ['guest_user'=> $guest_user]);
    //     }
    //     // $developer = DB::select('select * from developers');
    //     // return view('kyc', ['developer'=> $developer]);
    // }
    public function indexSpon(){
        $sponsor = DB::select('select * from sponsors');
        return view('kyc', ['sponsor'=> $sponsor]);
    }

    public function createKyc(Request $request){
    
        if ($request->input('submit') != null ){

            $this->validate($request, [
                'KYC_IMG' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5000',
            ]);
    
            // Insert && Update
            if($request->has('KYC_IMG')){
                $upload = $request->file('KYC_IMG');
                $img_name = 'KYC_'.time().'.'.$upload->getClientOriginalExtension();
                $path = public_path('home/Kyc');
                $upload->move($path, $img_name);

                $KYC_IMG = $img_name;
                $KYC_CREATE_DATE = $request->input('KYC_CREATE_DATE');
                $USER_ID = $request->input('USER_ID');
                $USER_EMAIL = $request->input('USER_EMAIL');

                if($KYC_IMG != '' || $KYC_CREATE_DATE != '' || $USER_ID != '' || $USER_EMAIL != ''){
                    $data = array("KYC_IMG"=>$KYC_IMG, "KYC_CREATE_DATE"=>$KYC_CREATE_DATE, "USER_ID"=>$USER_ID, "USER_EMAIL"=>$USER_EMAIL);
        
                    // Insert && Update
                    $value = Kyc::InsertAndUpdateData($USER_EMAIL, $data);
                    if($value){
                        Session::flash('message','Insert successfully.');
                    }else{
                        Session::flash('message','Username already exists.');
                    }
                }
            }
        }
        // return view('user_profile');
        return redirect()->action('KycController@indexSpon');
        // return redirect()->action('UploadImageProfile@index',['type'=>0]);
    }
}
