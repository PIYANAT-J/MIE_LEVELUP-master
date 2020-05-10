<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Developer;
use App\Guest_user;
use App\Sponsors;

use DB;
use Session;

class UploadImageProfile extends Controller
{
    // public function index($DEV_ID = 0){

    //     // Fetch all records
    //     $userData['data'] = Developer::getuserData();
    
    //     $userData['edit'] = $DEV_ID;
    
    //     // Fetch edit record
    //     if($DEV_ID > 0){
    //         $userData['editData'] = Developer::getuserData($DEV_ID);
    //     }
    
    //     // Pass to view
    //     return view('user_profile')->with("userData",$userData);
    // }
    
    // public function save(Request $request){
    
    //     if ($request->input('submit') != null ){
    
    //         // Update record
    //         if($request->input('editid') != null ){
    //             // $DEV_TEL = $request->input('DEV_TEL');
    //             // $DEV_ID_CARD = $request->input('DEV_ID_CARD');
    //             // $DEV_IMG = $request->input('DEV_IMG');
    //             // $DEV_BIRTHDAY = $request->input('DEV_BIRTHDAY');
    //             // $DEV_AGE = $request->input('DEV_AGE');
    //             // $DEV_GENDER = $request->input('DEV_GENDER');
    //             // $DEV_ADDRESS = $request->input('DEV_ADDRESS');
    //             // $ZIPCODE_ID = $request->input('ZIPCODE_ID');
    //             // $USER_ID = $request->input('USER_ID');
    //             // $USER_EMAIL = $request->input('USER_EMAIL');
    //             // $editid = $request->input('editid');

    //             if($request->has('DEV_IMG')){
    //                 $upload = $request->file('DEV_IMG');
    //                 $img_name = 'DEV_'.time().'.'.$upload->getClientOriginalExtension();
    //                 $path = public_path('home/imgProfile');
    //                 $upload->move($path, $img_name);

    //                 $DEV_TEL = $request->input('DEV_TEL');
    //                 $DEV_ID_CARD = $request->input('DEV_ID_CARD');
    //                 $DEV_IMG = $img_name;
    //                 $DEV_BIRTHDAY = $request->input('DEV_BIRTHDAY');
    //                 $DEV_AGE = $request->input('DEV_AGE');
    //                 $DEV_GENDER = $request->input('DEV_GENDER');
    //                 $DEV_ADDRESS = $request->input('DEV_ADDRESS');
    //                 $ZIPCODE_ID = $request->input('ZIPCODE_ID');
    //                 $USER_ID = $request->input('USER_ID');
    //                 $USER_EMAIL = $request->input('USER_EMAIL');
    //                 $editid = $request->input('editid');
                
        
    //                 if($USER_EMAIL != '' || $DEV_TEL != '' || $DEV_ID_CARD != '' || $DEV_IMG != '' || $DEV_BIRTHDAY != '' || $DEV_AGE != '' || $DEV_GENDER != '' || $DEV_ADDRESS != '' || $ZIPCODE_ID != '' || $USER_ID != ''){
    //                     $data = array("DEV_TEL"=>$DEV_TEL, "DEV_ID_CARD"=>$DEV_ID_CARD, "DEV_IMG"=>$DEV_IMG, "DEV_BIRTHDAY"=>$DEV_BIRTHDAY,
    //                                 "DEV_AGE"=>$DEV_AGE, "DEV_GENDER"=>$DEV_GENDER, "DEV_ADDRESS"=>$DEV_ADDRESS, "ZIPCODE_ID"=>$ZIPCODE_ID, "USER_ID"=>$USER_ID,
    //                                 "USER_EMAIL" => $USER_EMAIL);

    //                 // if($USER_EMAIL != '' && $USER_ID != ''){
    //                 //     $data = array("USER_EMAIL" => $USER_EMAIL, "USER_ID" => $USER_ID);
                
    //                     // Update
    //                     Developer::updateData($editid, $data);
                
    //                     Session::flash('message','Update successfully.');
            
    //                 }
    //             // }else{
    //             //     print_r($request->input());
    //             }
        
    //         }else{ // Insert record
    //             if($request->has('DEV_IMG')){
    //                 $upload = $request->file('DEV_IMG');
    //                 $img_name = 'DEV_'.time().'.'.$upload->getClientOriginalExtension();
    //                 $path = public_path('home/imgProfile');
    //                 $upload->move($path, $img_name);

    //                 $DEV_TEL = $request->input('DEV_TEL');
    //                 $DEV_ID_CARD = $request->input('DEV_ID_CARD');
    //                 $DEV_IMG = $img_name;
    //                 $DEV_BIRTHDAY = $request->input('DEV_BIRTHDAY');
    //                 $DEV_AGE = $request->input('DEV_AGE');
    //                 $DEV_GENDER = $request->input('DEV_GENDER');
    //                 $DEV_ADDRESS = $request->input('DEV_ADDRESS');
    //                 $ZIPCODE_ID = $request->input('ZIPCODE_ID');
    //                 $USER_ID = $request->input('USER_ID');
    //                 $USER_EMAIL = $request->input('USER_EMAIL');
        
    //                 // if($USER_EMAIL != '' && $USER_ID != ''){
    //                 //     $data = array("USER_EMAIL" => $USER_EMAIL, "USER_ID" => $USER_ID);

    //                 if($USER_EMAIL != '' || $DEV_TEL != '' || $DEV_ID_CARD != '' || $DEV_IMG != '' || $DEV_BIRTHDAY != '' || $DEV_AGE != '' || $DEV_GENDER != '' || $DEV_ADDRESS != '' || $ZIPCODE_ID != '' || $USER_ID != ''){
    //                     $data = array("DEV_TEL"=>$DEV_TEL, "DEV_ID_CARD"=>$DEV_ID_CARD, "DEV_IMG"=>$DEV_IMG, "DEV_BIRTHDAY"=>$DEV_BIRTHDAY,
    //                                 "DEV_AGE"=>$DEV_AGE, "DEV_GENDER"=>$DEV_GENDER, "DEV_ADDRESS"=>$DEV_ADDRESS, "ZIPCODE_ID"=>$ZIPCODE_ID, "USER_ID"=>$USER_ID,
    //                                 "USER_EMAIL" => $USER_EMAIL);
            
    //                     // Insert
    //                     // $value = Developer::insertData($data);
    //                     $value = Developer::updateData($USER_EMAIL, $data);
    //                     if($value){
    //                         Session::flash('message','Insert successfully.');
    //                     }else{
    //                         Session::flash('message','Username already exists.');
    //                     }
            
    //                 }
    //             }
    //         }
    
    //     }
    //     return view('user_profile');
    //     // return redirect()->action('UploadImageProfile@index',['DEV_ID'=>0]);
    // }
    
    // public function deleteUser($id=0){
    
    //     if($id != 0){
    //         // Delete
    //         Page::deleteData($id);
        
    //         Session::flash('message','Delete successfully.');
        
    //     }
    //     return redirect()->action('PagesController@index',['id'=>0]);
    // }

    public function index(){
        $developer = DB::select('select * from developers');
        return view('dev_profile', ['developer'=> $developer]);
    }
    public function update(){
        $developer = DB::select('select * from developers');
        return view('update_profile', ['developer'=> $developer]);
    }

    public function indexGuest_user(){
        $guest_user = DB::select('select * from guest_users');
        return view('user_profile', ['guest_user'=> $guest_user]);
    }
    public function updateGuest_user(){
        $guest_user = DB::select('select * from guest_users');
        return view('update_profile', ['guest_user'=> $guest_user]);
    }

    public function indexSpon(){
        $sponsor = DB::select('select * from sponsors');
        return view('spon_profile', ['sponsor'=> $sponsor]);
    }
    public function updateSpon(){
        $sponsor = DB::select('select * from sponsors');
        return view('update_profile', ['sponsor'=> $sponsor]);
    }

    public function saveProfileDev(Request $request){
    
        if ($request->input('submit') != null ){
    
            // Insert && Update
            if($request->has('DEV_IMG')){
                $upload = $request->file('DEV_IMG');
                $img_name = 'DEV_'.time().'.'.$upload->getClientOriginalExtension();
                $path = public_path('home/imgProfile');
                $upload->move($path, $img_name);

                $DEV_TEL = $request->input('DEV_TEL');
                $DEV_ID_CARD = $request->input('DEV_ID_CARD');
                $DEV_IMG = $img_name;
                $DEV_BIRTHDAY = $request->input('DEV_BIRTHDAY');
                $DEV_AGE = $request->input('DEV_AGE');
                $DEV_GENDER = $request->input('DEV_GENDER');
                $DEV_ADDRESS = $request->input('DEV_ADDRESS');
                $ZIPCODE_ID = $request->input('ZIPCODE_ID');
                $USER_ID = $request->input('USER_ID');
                $USER_EMAIL = $request->input('USER_EMAIL');

                if($USER_EMAIL != '' || $DEV_TEL != '' || $DEV_ID_CARD != '' || $DEV_IMG != '' || $DEV_BIRTHDAY != '' || $DEV_AGE != '' || $DEV_GENDER != '' || $DEV_ADDRESS != '' || $ZIPCODE_ID != '' || $USER_ID != ''){
                    $data = array("DEV_TEL"=>$DEV_TEL, "DEV_ID_CARD"=>$DEV_ID_CARD, "DEV_IMG"=>$DEV_IMG, "DEV_BIRTHDAY"=>$DEV_BIRTHDAY,
                                "DEV_AGE"=>$DEV_AGE, "DEV_GENDER"=>$DEV_GENDER, "DEV_ADDRESS"=>$DEV_ADDRESS, "ZIPCODE_ID"=>$ZIPCODE_ID, "USER_ID"=>$USER_ID,
                                "USER_EMAIL" => $USER_EMAIL);
        
                    // Insert && Update
                    $value = Developer::InsertAndUpdateData($data);
                    if($value){
                        Session::flash('message','Insert successfully.');
                    }else{
                        Session::flash('message','Username already exists.');
                    }
                }
            }else{

                $DEV_TEL = $request->input('DEV_TEL');
                $DEV_ID_CARD = $request->input('DEV_ID_CARD');
                // $DEV_IMG = $img_name;
                $DEV_BIRTHDAY = $request->input('DEV_BIRTHDAY');
                $DEV_AGE = $request->input('DEV_AGE');
                $DEV_GENDER = $request->input('DEV_GENDER');
                $DEV_ADDRESS = $request->input('DEV_ADDRESS');
                $ZIPCODE_ID = $request->input('ZIPCODE_ID');
                $USER_ID = $request->input('USER_ID');
                $USER_EMAIL = $request->input('USER_EMAIL');

                if($USER_EMAIL != '' || $DEV_TEL != '' || $DEV_ID_CARD != '' || $DEV_BIRTHDAY != '' || $DEV_AGE != '' || $DEV_GENDER != '' || $DEV_ADDRESS != '' || $ZIPCODE_ID != '' || $USER_ID != ''){
                    $data = array("DEV_TEL"=>$DEV_TEL, "DEV_ID_CARD"=>$DEV_ID_CARD, "DEV_BIRTHDAY"=>$DEV_BIRTHDAY,
                                "DEV_AGE"=>$DEV_AGE, "DEV_GENDER"=>$DEV_GENDER, "DEV_ADDRESS"=>$DEV_ADDRESS, "ZIPCODE_ID"=>$ZIPCODE_ID, "USER_ID"=>$USER_ID,
                                "USER_EMAIL" => $USER_EMAIL);
        
                    // Insert && Update
                    $value = Developer::InsertAndUpdateData($data);
                    if($value){
                        Session::flash('message','Insert successfully.');
                    }else{
                        Session::flash('message','Username already exists.');
                    }
                }
            }
        }
        // return view('user_profile');
        return redirect()->action('UploadImageProfile@index');
        // return redirect()->action('UploadImageProfile@index',['type'=>0]);
    }

    public function saveProfileUser(Request $request){
    
        if ($request->input('submit') != null ){
    
            // Insert && Update
            if($request->has('GUEST_USERS_IMG')){
                $upload = $request->file('GUEST_USERS_IMG');
                $img_name = 'USER_'.time().'.'.$upload->getClientOriginalExtension();
                $path = public_path('home/imgProfile');
                $upload->move($path, $img_name);

                $GUEST_USERS_TEL = $request->input('GUEST_USERS_TEL');
                $GUEST_USERS_ID_CARD = $request->input('GUEST_USERS_ID_CARD');
                $GUEST_USERS_IMG = $img_name;
                $GUEST_USERS_BIRTHDAY = $request->input('GUEST_USERS_BIRTHDAY');
                $GUEST_USERS_AGE = $request->input('GUEST_USERS_AGE');
                $GUEST_USERS_GENDER = $request->input('GUEST_USERS_GENDER');
                $GUEST_USERS_ADDRESS = $request->input('GUEST_USERS_ADDRESS');
                $ZIPCODE_ID = $request->input('ZIPCODE_ID');
                $USER_ID = $request->input('USER_ID');
                $USER_EMAIL = $request->input('USER_EMAIL');

                if($USER_EMAIL != '' || $GUEST_USERS_TEL != '' || $GUEST_USERS_ID_CARD != '' || $GUEST_USERS_IMG != '' || $GUEST_USERS_BIRTHDAY != '' || $GUEST_USERS_AGE != '' || $GUEST_USERS_GENDER != '' || $GUEST_USERS_ADDRESS != '' || $ZIPCODE_ID != '' || $USER_ID != ''){
                    $data = array("GUEST_USERS_TEL"=>$GUEST_USERS_TEL, "GUEST_USERS_ID_CARD"=>$GUEST_USERS_ID_CARD, "GUEST_USERS_IMG"=>$GUEST_USERS_IMG, "GUEST_USERS_BIRTHDAY"=>$GUEST_USERS_BIRTHDAY,
                                "GUEST_USERS_AGE"=>$GUEST_USERS_AGE, "GUEST_USERS_GENDER"=>$GUEST_USERS_GENDER, "GUEST_USERS_ADDRESS"=>$GUEST_USERS_ADDRESS, "ZIPCODE_ID"=>$ZIPCODE_ID, "USER_ID"=>$USER_ID,
                                "USER_EMAIL" => $USER_EMAIL);
        
                    // Insert && Update
                    $value = Guest_user::InsertAndUpdateData($USER_EMAIL, $data);
                    if($value){
                        Session::flash('message','Insert successfully.');
                    }else{
                        Session::flash('message','Username already exists.');
                    }
                }
            }else{
                $GUEST_USERS_TEL = $request->input('GUEST_USERS_TEL');
                $GUEST_USERS_ID_CARD = $request->input('GUEST_USERS_ID_CARD');
                $GUEST_USERS_BIRTHDAY = $request->input('GUEST_USERS_BIRTHDAY');
                $GUEST_USERS_AGE = $request->input('GUEST_USERS_AGE');
                $GUEST_USERS_GENDER = $request->input('GUEST_USERS_GENDER');
                $GUEST_USERS_ADDRESS = $request->input('GUEST_USERS_ADDRESS');
                $ZIPCODE_ID = $request->input('ZIPCODE_ID');
                $USER_ID = $request->input('USER_ID');
                $USER_EMAIL = $request->input('USER_EMAIL');

                if($USER_EMAIL != '' || $GUEST_USERS_TEL != '' || $GUEST_USERS_ID_CARD != '' || $GUEST_USERS_BIRTHDAY != '' || $GUEST_USERS_AGE != '' || $GUEST_USERS_GENDER != '' || $GUEST_USERS_ADDRESS != '' || $ZIPCODE_ID != '' || $USER_ID != ''){
                    $data = array("GUEST_USERS_TEL"=>$GUEST_USERS_TEL, "GUEST_USERS_ID_CARD"=>$GUEST_USERS_ID_CARD, "GUEST_USERS_BIRTHDAY"=>$GUEST_USERS_BIRTHDAY,
                                "GUEST_USERS_AGE"=>$GUEST_USERS_AGE, "GUEST_USERS_GENDER"=>$GUEST_USERS_GENDER, "GUEST_USERS_ADDRESS"=>$GUEST_USERS_ADDRESS, "ZIPCODE_ID"=>$ZIPCODE_ID, "USER_ID"=>$USER_ID,
                                "USER_EMAIL" => $USER_EMAIL);
        
                    // Insert && Update
                    $value = Guest_user::InsertAndUpdateData($USER_EMAIL, $data);
                    if($value){
                        Session::flash('message','Insert successfully.');
                    }else{
                        Session::flash('message','Username already exists.');
                    }
                }
            }
        }
        // return view('user_profile');
        return redirect()->action('UploadImageProfile@indexGuest_user');
    }

    public function saveProfileSpon(Request $request){
    
        if ($request->input('submit') != null ){
    
            // Insert && Update
            if($request->has('SPON_IMG')){
                $upload = $request->file('SPON_IMG');
                $img_name = 'SPON_'.time().'.'.$upload->getClientOriginalExtension();
                $path = public_path('home/imgProfile');
                $upload->move($path, $img_name);

                $SPON_TEL = $request->input('SPON_TEL');
                $SPON_ID_CARD = $request->input('SPON_ID_CARD');
                $SPON_IMG = $img_name;
                $SPON_BIRTHDAY = $request->input('SPON_BIRTHDAY');
                $SPON_AGE = $request->input('SPON_AGE');
                $SPON_GENDER = $request->input('SPON_GENDER');
                $SPON_ADDRESS = $request->input('SPON_ADDRESS');
                $ZIPCODE_ID = $request->input('ZIPCODE_ID');
                $USER_ID = $request->input('USER_ID');
                $USER_EMAIL = $request->input('USER_EMAIL');

                if($USER_EMAIL != '' || $SPON_TEL != '' || $SPON_ID_CARD != '' || $SPON_IMG != '' || $SPON_BIRTHDAY != '' || $SPON_AGE != '' || $SPON_GENDER != '' || $SPON_ADDRESS != '' || $ZIPCODE_ID != '' || $USER_ID != ''){
                    $data = array("SPON_TEL"=>$SPON_TEL, "SPON_ID_CARD"=>$SPON_ID_CARD, "SPON_IMG"=>$SPON_IMG, "SPON_BIRTHDAY"=>$SPON_BIRTHDAY,
                                "SPON_AGE"=>$SPON_AGE, "SPON_GENDER"=>$SPON_GENDER, "SPON_ADDRESS"=>$SPON_ADDRESS, "ZIPCODE_ID"=>$ZIPCODE_ID, "USER_ID"=>$USER_ID,
                                "USER_EMAIL" => $USER_EMAIL);
        
                    // Insert && Update
                    $value = Sponsors::InsertAndUpdateData($USER_EMAIL, $data);
                    if($value){
                        Session::flash('message','Insert successfully.');
                    }else{
                        Session::flash('message','Username already exists.');
                    }
                }
            }else{
                $SPON_TEL = $request->input('SPON_TEL');
                $SPON_ID_CARD = $request->input('SPON_ID_CARD');
                $SPON_BIRTHDAY = $request->input('SPON_BIRTHDAY');
                $SPON_AGE = $request->input('SPON_AGE');
                $SPON_GENDER = $request->input('SPON_GENDER');
                $SPON_ADDRESS = $request->input('SPON_ADDRESS');
                $ZIPCODE_ID = $request->input('ZIPCODE_ID');
                $USER_ID = $request->input('USER_ID');
                $USER_EMAIL = $request->input('USER_EMAIL');

                if($USER_EMAIL != '' || $SPON_TEL != '' || $SPON_ID_CARD != '' || $SPON_BIRTHDAY != '' || $SPON_AGE != '' || $SPON_GENDER != '' || $SPON_ADDRESS != '' || $ZIPCODE_ID != '' || $USER_ID != ''){
                    $data = array("SPON_TEL"=>$SPON_TEL, "SPON_ID_CARD"=>$SPON_ID_CARD, "SPON_BIRTHDAY"=>$SPON_BIRTHDAY,
                                "SPON_AGE"=>$SPON_AGE, "SPON_GENDER"=>$SPON_GENDER, "SPON_ADDRESS"=>$SPON_ADDRESS, "ZIPCODE_ID"=>$ZIPCODE_ID, "USER_ID"=>$USER_ID,
                                "USER_EMAIL" => $USER_EMAIL);
        
                    // Insert && Update
                    $value = Sponsors::InsertAndUpdateData($USER_EMAIL, $data);
                    if($value){
                        Session::flash('message','Insert successfully.');
                    }else{
                        Session::flash('message','Username already exists.');
                    }
                }
            }
        }
        // return view('user_profile');
        return redirect()->action('UploadImageProfile@indexSpon');
    }
}
