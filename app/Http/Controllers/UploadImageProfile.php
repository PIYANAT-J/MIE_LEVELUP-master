<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
// use Illuminate\Support\Facades\DB;

use App\Developer;
use App\Guest_user;
use App\Sponsors;
use App\Game;

use Session;
use Image;
use Auth;
use DB;

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
    // public function game(){
    //     $game = DB::select('select * from games');
    //     return view('profile.dev_profile', ['game'=>$game]);
    // }

    public function index(){
        $game_img = DB::table('games')->where('USER_ID', Auth::user()->id)->get();
        if($game_img->count() == 0){
            $developer = DB::table('developers')->where('USER_ID', Auth::user()->id)->get();
            return view('profile.dev_profile', compact('developer'));
        }else{
            // $developer = DB::table('developers')
            //                 ->join('games', 'games.USER_ID', '=', 'developers.USER_ID')
            //                 // ->select('developers.*', 'games.GAME_IMG_PROFILE', 'games.GAME_STATUS', 'games.GAME_DATE')
            //                 ->select('developers.*', 'games.*')
            //                 ->get();
            
            // $game = Game::findOrFail(Auth::user()->id);
            // $GAME_IMG_PROFILE = $game->GAME_IMG_PROFILE;
            // $GAME_STATUS = $game->GAME_STATUS;
            // $GAME_DATE = $game->GAME_DATE;

            $developer = DB::table('developers')->where('USER_ID', Auth::user()->id)->get();
            $game = DB::table('games')->where('USER_ID', Auth::user()->id)->get();
            
            return view('profile.dev_profile', compact('developer','game'));
        }
    }
    public function update(){
        $developer = DB::select('select * from developers');
        return view('profile.updateProfile.devUpdate_profile', ['developer'=> $developer]);
    }

    public function edit_game(){
        $developer = DB::select('select * from developers');
        return view('game.edit_upload_game', ['developer'=> $developer]);
    }

    public function indexGuest_user(){
        $gameShalf = DB::table('downloads')->where('USER_ID', Auth::user()->id)->get();
        if($gameShalf->count() == 0){
            $guest_user = DB::table('guest_users')->where('USER_ID', Auth::user()->id)->get();
            return view('profile.user_profile', compact('guest_user'));
        }else{
            $guest_user = DB::table('guest_users')->where('USER_ID', Auth::user()->id)->get();
            // $gameDownload = DB::table('downloads')->where('USER_ID', Auth::user()->id)->value('GAME_ID');
            // $gDownload = DB::table('downloads')->where('USER_ID', Auth::user()->id)->get();
            // if($gameDownload->count() == 0){
            //     $game = DB::table('games')->where('GAME_ID', $gameDownload)->get();
            // }else{
            //     $game = DB::table('games')->where('GAME_ID', $gameDownload)->get();
            // }
            $game = DB::table('downloads')
                        ->join('games', 'games.GAME_ID', '=', 'downloads.GAME_ID')
                        ->select('downloads.*', 'games.GAME_IMG_PROFILE','GAME_NAME','GAME_DATE')
                        ->get();
            // $game = DB::table('games')->where('GAME_ID', $gameDownload)->get();
            return view('profile.user_profile', compact('guest_user', 'game'));
        }
        // $guest_user = DB::select('select * from guest_users');
        // return view('profile.user_profile', ['guest_user'=> $guest_user]);
    }
    public function updateGuest_user(){
        $guest_user = DB::select('select * from guest_users');
        return view('profile.updateProfile.userUpdate_profile', ['guest_user'=> $guest_user]);
    }

    public function indexSpon(){
        $sponsor = DB::select('select * from sponsors');
        return view('profile.spon_profile', ['sponsor'=> $sponsor]);
    }
    public function updateSpon(){
        $sponsor = DB::select('select * from sponsors');
        return view('profile.updateProfile.sponUpdate_profile', ['sponsor'=> $sponsor]);
    }

    public function saveProfileDev(Request $request){
    
        if ($request->input('submit') != null ){

            // $this->validate($request, [
            //     'DEV_TEL' => 'required|',
            //     'DEV_ID_CARD' => 'required|',
            //     'DEV_IMG' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5000',
            //     'DEV_BIRTHDAY' => 'required|',
            //     'DEV_AGE' => 'required|',
            //     'DEV_GENDER' => 'required|',
            //     'DEV_ADDRESS' => 'required|',
            //     'ZIPCODE_ID' => 'required|',
            //     'USER_ID' => 'required|',
            //     'USER_EMAIL' => 'required|',
            // ]);
    
            // Insert && Update
            if($request->has('DEV_IMG')){
                $upload = $request->file('DEV_IMG');
                $img_name = 'DEV_'.time().'.'.$upload->getClientOriginalExtension();
                $path = public_path('home/imgProfile');
                $resize_image = Image::make($upload->getRealPath());
                $resize_image->resize(300, 300, function($constraint){
                    $constraint->aspectRatio();
                   })->save($path . '/' . $img_name);
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
                $CREATE = $request->input('DATE_CREATE');
                $MODIFY = $request->input('DATE_MODIFY');

                if($USER_EMAIL != '' || $DEV_TEL != '' || $DEV_ID_CARD != '' || $DEV_IMG != '' || $DEV_BIRTHDAY != '' || $DEV_AGE != '' || $DEV_GENDER != '' || $DEV_ADDRESS != '' 
                    || $ZIPCODE_ID != '' || $USER_ID != '' || $CREATE != '' || $MODIFY != ''){
                    $data = array("DEV_TEL"=>$DEV_TEL, "DEV_ID_CARD"=>$DEV_ID_CARD, "DEV_IMG"=>$DEV_IMG, "DEV_BIRTHDAY"=>$DEV_BIRTHDAY,
                                "DEV_AGE"=>$DEV_AGE, "DEV_GENDER"=>$DEV_GENDER, "DEV_ADDRESS"=>$DEV_ADDRESS, "ZIPCODE_ID"=>$ZIPCODE_ID, "USER_ID"=>$USER_ID,
                                "USER_EMAIL" => $USER_EMAIL, "DATE_CREATE"=>$CREATE, "DATE_MODIFY"=>$MODIFY);
        
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
                $DEV_BIRTHDAY = $request->input('DEV_BIRTHDAY');
                $DEV_AGE = $request->input('DEV_AGE');
                $DEV_GENDER = $request->input('DEV_GENDER');
                $DEV_ADDRESS = $request->input('DEV_ADDRESS');
                $ZIPCODE_ID = $request->input('ZIPCODE_ID');
                $USER_ID = $request->input('USER_ID');
                $USER_EMAIL = $request->input('USER_EMAIL');
                $CREATE = $request->input('DATE_CREATE');
                $MODIFY = $request->input('DATE_MODIFY');

                if($USER_EMAIL != '' || $DEV_TEL != '' || $DEV_ID_CARD != '' || $DEV_BIRTHDAY != '' || $DEV_AGE != '' || $DEV_GENDER != '' || $DEV_ADDRESS != '' || $ZIPCODE_ID != '' 
                    || $USER_ID != '' || $CREATE != '' || $MODIFY != ''){
                    $data = array("DEV_TEL"=>$DEV_TEL, "DEV_ID_CARD"=>$DEV_ID_CARD, "DEV_BIRTHDAY"=>$DEV_BIRTHDAY,
                                "DEV_AGE"=>$DEV_AGE, "DEV_GENDER"=>$DEV_GENDER, "DEV_ADDRESS"=>$DEV_ADDRESS, "ZIPCODE_ID"=>$ZIPCODE_ID, "USER_ID"=>$USER_ID,
                                "USER_EMAIL" => $USER_EMAIL, "DATE_CREATE"=>$CREATE, "DATE_MODIFY"=>$MODIFY);
        
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
        return redirect()->action('UploadImageProfile@index');
    }

    public function saveProfileUser(Request $request){
    
        if ($request->input('submit') != null ){

            // $this->validate($request, [
            //     'GUEST_USERS_IMG' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5000',
            // ]);
    
            // Insert && Update
            if($request->has('GUEST_USERS_IMG')){
                $upload = $request->file('GUEST_USERS_IMG');
                $img_name = 'USER_'.time().'.'.$upload->getClientOriginalExtension();
                $path = public_path('home/imgProfile');
                $resize_image = Image::make($upload->getRealPath());
                $resize_image->resize(300, 300, function($constraint){
                    $constraint->aspectRatio();
                   })->save($path . '/' . $img_name);
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
                $CREATE = $request->input('DATE_CREATE');
                $MODIFY = $request->input('DATE_MODIFY');

                if($USER_EMAIL != '' || $GUEST_USERS_TEL != '' || $GUEST_USERS_ID_CARD != '' || $GUEST_USERS_IMG != '' || $GUEST_USERS_BIRTHDAY != '' || $GUEST_USERS_AGE != '' 
                    || $GUEST_USERS_GENDER != '' || $GUEST_USERS_ADDRESS != '' || $ZIPCODE_ID != '' || $USER_ID != '' || $CREATE != '' || $MODIFY != ''){
                    $data = array("GUEST_USERS_TEL"=>$GUEST_USERS_TEL, "GUEST_USERS_ID_CARD"=>$GUEST_USERS_ID_CARD, "GUEST_USERS_IMG"=>$GUEST_USERS_IMG, "GUEST_USERS_BIRTHDAY"=>$GUEST_USERS_BIRTHDAY,
                                "GUEST_USERS_AGE"=>$GUEST_USERS_AGE, "GUEST_USERS_GENDER"=>$GUEST_USERS_GENDER, "GUEST_USERS_ADDRESS"=>$GUEST_USERS_ADDRESS, "ZIPCODE_ID"=>$ZIPCODE_ID, "USER_ID"=>$USER_ID,
                                "USER_EMAIL" => $USER_EMAIL, "DATE_CREATE"=>$CREATE, "DATE_MODIFY"=>$MODIFY);
        
                    // Insert && Update
                    $value = Guest_user::InsertAndUpdateData($data);
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
                $CREATE = $request->input('DATE_CREATE');
                $MODIFY = $request->input('DATE_MODIFY');

                if($USER_EMAIL != '' || $GUEST_USERS_TEL != '' || $GUEST_USERS_ID_CARD != '' || $GUEST_USERS_BIRTHDAY != '' || $GUEST_USERS_AGE != '' || $GUEST_USERS_GENDER != '' 
                    || $GUEST_USERS_ADDRESS != '' || $ZIPCODE_ID != '' || $USER_ID != '' || $CREATE != '' || $MODIFY != ''){
                    $data = array("GUEST_USERS_TEL"=>$GUEST_USERS_TEL, "GUEST_USERS_ID_CARD"=>$GUEST_USERS_ID_CARD, "GUEST_USERS_BIRTHDAY"=>$GUEST_USERS_BIRTHDAY,
                                "GUEST_USERS_AGE"=>$GUEST_USERS_AGE, "GUEST_USERS_GENDER"=>$GUEST_USERS_GENDER, "GUEST_USERS_ADDRESS"=>$GUEST_USERS_ADDRESS, "ZIPCODE_ID"=>$ZIPCODE_ID, "USER_ID"=>$USER_ID,
                                "USER_EMAIL" => $USER_EMAIL, "DATE_CREATE"=>$CREATE, "DATE_MODIFY"=>$MODIFY);
        
                    // Insert && Update
                    $value = Guest_user::InsertAndUpdateData($data);
                    if($value){
                        Session::flash('message','Insert successfully.');
                    }else{
                        Session::flash('message','Username already exists.');
                    }
                }
            }
        }
        return redirect()->action('UploadImageProfile@indexGuest_user');
    }

    public function saveProfileSpon(Request $request){
    
        if ($request->input('submit') != null ){

            // $this->validate($request, [
            //     'SPON_IMG' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5000',
            // ]);
    
            // Insert && Update
            if($request->has('SPON_IMG')){
                $upload = $request->file('SPON_IMG');
                $img_name = 'SPON_'.time().'.'.$upload->getClientOriginalExtension();
                $path = public_path('home/imgProfile');
                $resize_image = Image::make($upload->getRealPath());
                $resize_image->resize(300, 300, function($constraint){
                    $constraint->aspectRatio();
                   })->save($path . '/' . $img_name);
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
                $CREATE = $request->input('DATE_CREATE');
                $MODIFY = $request->input('DATE_MODIFY');

                if($USER_EMAIL != '' || $SPON_TEL != '' || $SPON_ID_CARD != '' || $SPON_IMG != '' || $SPON_BIRTHDAY != '' || $SPON_AGE != '' || $SPON_GENDER != '' || $SPON_ADDRESS != '' 
                    || $ZIPCODE_ID != '' || $USER_ID != '' || $CREATE != '' || $MODIFY != ''){
                    $data = array("SPON_TEL"=>$SPON_TEL, "SPON_ID_CARD"=>$SPON_ID_CARD, "SPON_IMG"=>$SPON_IMG, "SPON_BIRTHDAY"=>$SPON_BIRTHDAY,
                                "SPON_AGE"=>$SPON_AGE, "SPON_GENDER"=>$SPON_GENDER, "SPON_ADDRESS"=>$SPON_ADDRESS, "ZIPCODE_ID"=>$ZIPCODE_ID, "USER_ID"=>$USER_ID,
                                "USER_EMAIL" => $USER_EMAIL, "DATE_CREATE"=>$CREATE, "DATE_MODIFY"=>$MODIFY);
        
                    // Insert && Update
                    $value = Sponsors::InsertAndUpdateData($data);
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
                $CREATE = $request->input('DATE_CREATE');
                $MODIFY = $request->input('DATE_MODIFY');

                if($USER_EMAIL != '' || $SPON_TEL != '' || $SPON_ID_CARD != '' || $SPON_BIRTHDAY != '' || $SPON_AGE != '' || $SPON_GENDER != '' || $SPON_ADDRESS != '' 
                    || $ZIPCODE_ID != '' || $USER_ID != '' || $CREATE != '' || $MODIFY != ''){
                    $data = array("SPON_TEL"=>$SPON_TEL, "SPON_ID_CARD"=>$SPON_ID_CARD, "SPON_BIRTHDAY"=>$SPON_BIRTHDAY,
                                "SPON_AGE"=>$SPON_AGE, "SPON_GENDER"=>$SPON_GENDER, "SPON_ADDRESS"=>$SPON_ADDRESS, "ZIPCODE_ID"=>$ZIPCODE_ID, "USER_ID"=>$USER_ID,
                                "USER_EMAIL" => $USER_EMAIL, "DATE_CREATE"=>$CREATE, "DATE_MODIFY"=>$MODIFY);
        
                    // Insert && Update
                    $value = Sponsors::InsertAndUpdateData($data);
                    if($value){
                        Session::flash('message','Insert successfully.');
                    }else{
                        Session::flash('message','Username already exists.');
                    }
                }
            }
        }
        return redirect()->action('UploadImageProfile@indexSpon');
    }
}