<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Kyc;

use DB;
use Auth;
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

    // public function indexSpon(){
    //     $sponsor = DB::select('select * from sponsors');
    //     return view('kyc', ['sponsor'=> $sponsor]);
    // }
    public function indexUserKyc(){
        $guest_user = DB::table('guest_users')->where('USER_EMAIL', Auth::user()->email)->get();
        $userKyc = DB::table('kycs')->where('USER_EMAIL', Auth::user()->email)->first();
        return view('kyc.userlvp_kyc', compact('guest_user', 'userKyc'));
    }

    public function indexDevKyc(){
        $developer = DB::table('developers')->where('USER_EMAIL', Auth::user()->email)->get();
        $userKyc = DB::table('kycs')->where('USER_EMAIL', Auth::user()->email)->first();
        return view('kyc.devlvp_kyc', compact('developer', 'userKyc'));
    }

    public function indexSponKyc(){
        $sponsor = DB::table('sponsors')
                        ->join('kycs', 'sponsors.USER_ID', '=', 'kycs.USER_ID')
                        ->get();
        return view('kyc.sponKyc', ['sponsor'=> $sponsor]);
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
                $KYC_STATUS = $request->input('KYC_STATUS');
                $KYC_CREATE_DATE = $request->input('KYC_CREATE_DATE');
                $USER_ID = $request->input('USER_ID');
                $USER_EMAIL = $request->input('USER_EMAIL');

                if($KYC_IMG != '' || $KYC_CREATE_DATE != '' || $USER_ID != '' || $USER_EMAIL != '' || $KYC_STATUS != ''){
                    $data = array("KYC_IMG"=>$KYC_IMG, "KYC_CREATE_DATE"=>$KYC_CREATE_DATE, "USER_ID"=>$USER_ID, "USER_EMAIL"=>$USER_EMAIL, "KYC_STATUS"=>$KYC_STATUS);
                    // die('<pre>'. print_r($data, 1));
                    // Insert && Update
                    $value = Kyc::InsertAndUpdateData($data);
                    if($value){
                        Session::flash('message','Insert successfully.');
                    }else{
                        Session::flash('message','Username already exists.');
                    }
                }
            }

            $Type = $request->input('users_type');

            if($Type == '2'){
                return redirect()->action('KycController@indexDevKyc');
            }elseif($Type == '3'){
                return redirect()->action('KycController@indexSponKyc');
            }else{
                return redirect()->action('KycController@indexUserKyc');
            }
        }
    }
}
