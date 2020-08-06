<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
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
    public function Developer(){
        // $game_img = DB::table('games')->where('USER_ID', Auth::user()->id)->get();
        // if($game_img->count() == 0){
        //     $developer = DB::table('developers')->where('USER_EMAIL', Auth::user()->email)->get();
        //     $userKyc = DB::table('kycs')->where('USER_EMAIL', Auth::user()->email)->first();
        //     dd($developer);
        //     return view('profile.devlvp_profile', compact('developer', 'userKyc'));
        // }else{
            $developer = DB::table('developers')->where('USER_EMAIL', Auth::user()->email)->get();
            $userKyc = DB::table('kycs')->where('USER_EMAIL', Auth::user()->email)->first();
            // dd($developer);
            return view('profile.devlvp_profile', compact('developer', 'userKyc'));
        // }
    }

    public function developer_shelf(){
        $game_shelf = DB::table('games')->where('USER_ID', Auth::user()->id)->get();
        if($game_shelf->count() == 0){
            $developer = DB::table('developers')->where('USER_EMAIL', Auth::user()->email)->get();
            $userKyc = DB::table('kycs')->where('USER_EMAIL', Auth::user()->email)->first();
            return view('profile.game.devlvp_shelf', compact('developer', 'userKyc'));
        }else{
            $developer = DB::table('developers')->where('USER_EMAIL', Auth::user()->email)->get();
            $userKyc = DB::table('kycs')->where('USER_EMAIL', Auth::user()->email)->first();
            $game = DB::table('games')->where('games.USER_ID', Auth::user()->id)->get();
            $CDownload = DB::table('downloads')->select(DB::raw('count(*) as downloads_count, GAME_ID'))
                            ->groupBy('GAME_ID')
                            ->get();
            // die('<pre>'. print_r($game, 1));
            return view('profile.game.devlvp_shelf', compact('developer', 'userKyc', 'game', 'CDownload'));
        }
    }
    public function viewUpload(){
        $developer = DB::table('developers')->where('USER_EMAIL', Auth::user()->email)->get();
        $userKyc = DB::table('kycs')->where('USER_EMAIL', Auth::user()->email)->first();
        return view('profile.devlvp_upload', compact('developer', 'userKyc'));
    }

    // public function edit_game(){
    //     $developer = DB::select('select * from developers');
    //     return view('game.edit_upload_game', ['developer'=> $developer]);
    // }

    public function Guest_user(){
        $gameShalf = DB::table('downloads')->where('USER_ID', Auth::user()->id)->get();
        if($gameShalf->count() == 0){
            $guest_user = DB::table('guest_users')->where('USER_EMAIL', Auth::user()->email)->get();
            $userKyc = DB::table('kycs')->where('USER_EMAIL', Auth::user()->email)->first();
            return view('profile.userlvp_profile', compact('guest_user', 'userKyc'));
        }else{
            $guest_user = DB::table('guest_users')->where('USER_EMAIL', Auth::user()->email)->get();
            $userKyc = DB::table('kycs')->where('USER_EMAIL', Auth::user()->email)->first();
            return view('profile.userlvp_profile', compact('guest_user', 'userKyc'));
        }
    }

    public function user_shelf(){
        $gameShalf = DB::table('downloads')->where('USER_ID', Auth::user()->id)->get();
        if($gameShalf->count() == 0){
            $guest_user = DB::table('guest_users')->where('USER_EMAIL', Auth::user()->email)->get();
            $userKyc = DB::table('kycs')->where('USER_EMAIL', Auth::user()->email)->first();
            return view('profile.game.userlvp_shelf', compact('guest_user', 'userKyc'));
        }else{
            $guest_user = DB::table('guest_users')->where('USER_EMAIL', Auth::user()->email)->get();
            $userKyc = DB::table('kycs')->where('USER_EMAIL', Auth::user()->email)->first();
            $game = DB::table('downloads')->where('downloads.USER_ID', Auth::user()->id)
                        ->join('games', 'games.GAME_ID', '=', 'downloads.GAME_ID')
                        ->select('downloads.*', 'games.GAME_IMG_PROFILE','GAME_NAME','GAME_DATE', 'RATED_B_L')
                        ->get();
            // die('<pre>'. print_r($game, 1));
            return view('profile.game.userlvp_shelf', compact('guest_user', 'userKyc', 'game'));
        }
    }


    public function Avatar(){
        $gameShalf = DB::table('downloads')->where('USER_ID', Auth::user()->id)->get();
        if($gameShalf->count() == 0){
            $guest_user = DB::table('guest_users')->where('USER_EMAIL', Auth::user()->email)->get();
            $userKyc = DB::table('kycs')->where('USER_EMAIL', Auth::user()->email)->first();
            return view('profile.avatar', compact('guest_user', 'userKyc'));
        }else{
            $guest_user = DB::table('guest_users')->where('USER_EMAIL', Auth::user()->email)->get();
            $userKyc = DB::table('kycs')->where('USER_EMAIL', Auth::user()->email)->first();
            return view('profile.avatar', compact('guest_user', 'userKyc'));
        }
    }

    public function Shop(){
        $gameShalf = DB::table('downloads')->where('USER_ID', Auth::user()->id)->get();
        if($gameShalf->count() == 0){
            $guest_user = DB::table('guest_users')->where('USER_EMAIL', Auth::user()->email)->get();
            $userKyc = DB::table('kycs')->where('USER_EMAIL', Auth::user()->email)->first();
            return view('shop', compact('guest_user', 'userKyc'));
        }else{
            $guest_user = DB::table('guest_users')->where('USER_EMAIL', Auth::user()->email)->get();
            $userKyc = DB::table('kycs')->where('USER_EMAIL', Auth::user()->email)->first();
            return view('shop', compact('guest_user', 'userKyc'));
        }
    }

    public function Sale(){
        $gameShalf = DB::table('downloads')->where('USER_ID', Auth::user()->id)->get();
        if($gameShalf->count() == 0){
            $guest_user = DB::table('guest_users')->where('USER_EMAIL', Auth::user()->email)->get();
            $userKyc = DB::table('kycs')->where('USER_EMAIL', Auth::user()->email)->first();
            return view('sale_item', compact('guest_user', 'userKyc'));
        }else{
            $guest_user = DB::table('guest_users')->where('USER_EMAIL', Auth::user()->email)->get();
            $userKyc = DB::table('kycs')->where('USER_EMAIL', Auth::user()->email)->first();
            return view('sale_item', compact('guest_user', 'userKyc'));
        }
    }

    public function AddSaleItem(){
        $gameShalf = DB::table('downloads')->where('USER_ID', Auth::user()->id)->get();
        if($gameShalf->count() == 0){
            $guest_user = DB::table('guest_users')->where('USER_EMAIL', Auth::user()->email)->get();
            $userKyc = DB::table('kycs')->where('USER_EMAIL', Auth::user()->email)->first();
            return view('add_sale_item', compact('guest_user', 'userKyc'));
        }else{
            $guest_user = DB::table('guest_users')->where('USER_EMAIL', Auth::user()->email)->get();
            $userKyc = DB::table('kycs')->where('USER_EMAIL', Auth::user()->email)->first();
            return view('add_sale_item', compact('guest_user', 'userKyc'));
        }
    }

    public function ShoppingCart(){
        $gameShalf = DB::table('downloads')->where('USER_ID', Auth::user()->id)->get();
        if($gameShalf->count() == 0){
            $guest_user = DB::table('guest_users')->where('USER_EMAIL', Auth::user()->email)->get();
            $userKyc = DB::table('kycs')->where('USER_EMAIL', Auth::user()->email)->first();
            return view('shopping_cart', compact('guest_user', 'userKyc'));
        }else{
            $guest_user = DB::table('guest_users')->where('USER_EMAIL', Auth::user()->email)->get();
            $userKyc = DB::table('kycs')->where('USER_EMAIL', Auth::user()->email)->first();
            return view('shopping_cart', compact('guest_user', 'userKyc'));
        }
    }

    public function Payment(){
        $gameShalf = DB::table('downloads')->where('USER_ID', Auth::user()->id)->get();
        if($gameShalf->count() == 0){
            $guest_user = DB::table('guest_users')->where('USER_EMAIL', Auth::user()->email)->get();
            $userKyc = DB::table('kycs')->where('USER_EMAIL', Auth::user()->email)->first();
            return view('payment', compact('guest_user', 'userKyc'));
        }else{
            $guest_user = DB::table('guest_users')->where('USER_EMAIL', Auth::user()->email)->get();
            $userKyc = DB::table('kycs')->where('USER_EMAIL', Auth::user()->email)->first();
            return view('payment', compact('guest_user', 'userKyc'));
        }
    }

    public function PaymentConfirmation(){
        $gameShalf = DB::table('downloads')->where('USER_ID', Auth::user()->id)->get();
        if($gameShalf->count() == 0){
            $guest_user = DB::table('guest_users')->where('USER_EMAIL', Auth::user()->email)->get();
            $userKyc = DB::table('kycs')->where('USER_EMAIL', Auth::user()->email)->first();
            return view('payment_confirmation', compact('guest_user', 'userKyc'));
        }else{
            $guest_user = DB::table('guest_users')->where('USER_EMAIL', Auth::user()->email)->get();
            $userKyc = DB::table('kycs')->where('USER_EMAIL', Auth::user()->email)->first();
            return view('payment_confirmation', compact('guest_user', 'userKyc'));
        }
    }
    public function SuccessfulPayment(){
        $gameShalf = DB::table('downloads')->where('USER_ID', Auth::user()->id)->get();
        if($gameShalf->count() == 0){
            $guest_user = DB::table('guest_users')->where('USER_EMAIL', Auth::user()->email)->get();
            $userKyc = DB::table('kycs')->where('USER_EMAIL', Auth::user()->email)->first();
            return view('successful_payment', compact('guest_user', 'userKyc'));
        }else{
            $guest_user = DB::table('guest_users')->where('USER_EMAIL', Auth::user()->email)->get();
            $userKyc = DB::table('kycs')->where('USER_EMAIL', Auth::user()->email)->first();
            return view('successful_payment', compact('guest_user', 'userKyc'));
        }
    }

    
    public function SimulatorTrade(){
        $gameShalf = DB::table('downloads')->where('USER_ID', Auth::user()->id)->get();
        if($gameShalf->count() == 0){
            $guest_user = DB::table('guest_users')->where('USER_EMAIL', Auth::user()->email)->get();
            $userKyc = DB::table('kycs')->where('USER_EMAIL', Auth::user()->email)->first();
            return view('simulator_trade', compact('guest_user', 'userKyc'));
        }else{
            $guest_user = DB::table('guest_users')->where('USER_EMAIL', Auth::user()->email)->get();
            $userKyc = DB::table('kycs')->where('USER_EMAIL', Auth::user()->email)->first();
            return view('simulator_trade', compact('guest_user', 'userKyc'));
        }
    }

    public function MyTrade(){
        $gameShalf = DB::table('downloads')->where('USER_ID', Auth::user()->id)->get();
        if($gameShalf->count() == 0){
            $guest_user = DB::table('guest_users')->where('USER_EMAIL', Auth::user()->email)->get();
            $userKyc = DB::table('kycs')->where('USER_EMAIL', Auth::user()->email)->first();
            return view('my_trade', compact('guest_user', 'userKyc'));
        }else{
            $guest_user = DB::table('guest_users')->where('USER_EMAIL', Auth::user()->email)->get();
            $userKyc = DB::table('kycs')->where('USER_EMAIL', Auth::user()->email)->first();
            return view('my_trade', compact('guest_user', 'userKyc'));
        }
    }

    public function MyTradeDetail(){
        $gameShalf = DB::table('downloads')->where('USER_ID', Auth::user()->id)->get();
        if($gameShalf->count() == 0){
            $guest_user = DB::table('guest_users')->where('USER_EMAIL', Auth::user()->email)->get();
            $userKyc = DB::table('kycs')->where('USER_EMAIL', Auth::user()->email)->first();
            return view('my_trade_detail', compact('guest_user', 'userKyc'));
        }else{
            $guest_user = DB::table('guest_users')->where('USER_EMAIL', Auth::user()->email)->get();
            $userKyc = DB::table('kycs')->where('USER_EMAIL', Auth::user()->email)->first();
            return view('my_trade_detail', compact('guest_user', 'userKyc'));
        }
    }

    public function RankingTrade(){
        $gameShalf = DB::table('downloads')->where('USER_ID', Auth::user()->id)->get();
        if($gameShalf->count() == 0){
            $guest_user = DB::table('guest_users')->where('USER_EMAIL', Auth::user()->email)->get();
            $userKyc = DB::table('kycs')->where('USER_EMAIL', Auth::user()->email)->first();
            return view('ranking_trade', compact('guest_user', 'userKyc'));
        }else{
            $guest_user = DB::table('guest_users')->where('USER_EMAIL', Auth::user()->email)->get();
            $userKyc = DB::table('kycs')->where('USER_EMAIL', Auth::user()->email)->first();
            return view('ranking_trade', compact('guest_user', 'userKyc'));
        }
    }

    public function RealInvestors(){
        $gameShalf = DB::table('downloads')->where('USER_ID', Auth::user()->id)->get();
        if($gameShalf->count() == 0){
            $guest_user = DB::table('guest_users')->where('USER_EMAIL', Auth::user()->email)->get();
            $userKyc = DB::table('kycs')->where('USER_EMAIL', Auth::user()->email)->first();
            return view('real_investors', compact('guest_user', 'userKyc'));
        }else{
            $guest_user = DB::table('guest_users')->where('USER_EMAIL', Auth::user()->email)->get();
            $userKyc = DB::table('kycs')->where('USER_EMAIL', Auth::user()->email)->first();
            return view('real_investors', compact('guest_user', 'userKyc'));
        }
    }

    // public function updateGuest_user(){
    //     $guest_user = DB::select('select * from guest_users');
    //     return view('profile.updateProfile.userUpdate_profile', ['guest_user'=> $guest_user]);
    // }

    public function indexSpon(){
        $sponsor = DB::table('sponsors')->where('USER_EMAIL', Auth::user()->email)->get();
        return view('profile.sponsor_profile', compact('sponsor'));
    }

    public function AdvertisingPackage(){
        $sponsor = DB::table('sponsors')->where('USER_EMAIL', Auth::user()->email)->get();
        return view('advertising_package', compact('sponsor'));
    }
    public function updateSpon(){
        $sponsor = DB::select('select * from sponsors');
        return view('profile.updateProfile.sponUpdate_profile', ['sponsor'=> $sponsor]);
    }

    public function saveProfileDev(Request $request){
        dd($request);
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

                $deleteImg = DB::table('developers')->where('USER_ID', Auth::user()->id)->value('DEV_IMG');
                if($deleteImg != "No_Img.jpg"){
                    $pathDeleteImg = 'home/imgProfile/'.$deleteImg;
                    if(File::exists(public_path($pathDeleteImg))){
                        File::delete(public_path($pathDeleteImg));
                    }
                }

                $DEV_TEL = $request->input('DEV_TEL');
                $DEV_ID_CARD = $request->input('DEV_ID_CARD');
                $DEV_IMG = $img_name;
                $DEV_AGE = $request->input('DEV_AGE');
                $DEV_GENDER = $request->input('DEV_GENDER');
                $DEV_ADDRESS = $request->input('DEV_ADDRESS');
                $ZIPCODE_ID = $request->input('ZIPCODE_ID');
                $USER_ID = $request->input('USER_ID');
                $USER_EMAIL = $request->input('USER_EMAIL');
                $CREATE = $request->input('DATE_CREATE');
                $MODIFY = $request->input('DATE_MODIFY');

                $name = $request->input('name');
                $surname = $request->input('surname');

                if($request->input('yyyy') == "year"){
                    $BIRTHDAY = DB::table('developers')->where('USER_ID', $USER_ID)->value('DEV_BIRTHDAY');
                    if($BIRTHDAY == null){
                        $DEV_BIRTHDAY = date('Y-m-d');
                    }else{
                        $DEV_BIRTHDAY = $BIRTHDAY;
                    }
                }else{
                    $yyyy = $request->input('yyyy');
                    $mm = $request->input('mm');
                    $dd = $request->input('dd');

                    $DEV_BIRTHDAY = $yyyy.'-'.$mm .'-'.$dd;
                }

                if($USER_EMAIL != '' || $DEV_TEL != '' || $DEV_ID_CARD != '' || $DEV_IMG != '' || $DEV_BIRTHDAY != '' || $DEV_AGE != '' || $DEV_GENDER != '' || $DEV_ADDRESS != '' 
                    || $ZIPCODE_ID != '' || $USER_ID != '' || $CREATE != '' || $MODIFY != ''){
                    $data = array("DEV_TEL"=>$DEV_TEL, "DEV_ID_CARD"=>$DEV_ID_CARD, "DEV_IMG"=>$DEV_IMG, "DEV_BIRTHDAY"=>$DEV_BIRTHDAY,
                                "DEV_AGE"=>$DEV_AGE, "DEV_GENDER"=>$DEV_GENDER, "DEV_ADDRESS"=>$DEV_ADDRESS, "ZIPCODE_ID"=>$ZIPCODE_ID, "USER_ID"=>$USER_ID,
                                "USER_EMAIL" => $USER_EMAIL, "DATE_CREATE"=>$CREATE, "DATE_MODIFY"=>$MODIFY, "name"=>$name, "surname"=>$surname);
                                // die('<pre>'. print_r($data, 1));
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
                $DEV_AGE = $request->input('DEV_AGE');
                $DEV_GENDER = $request->input('DEV_GENDER');
                $DEV_ADDRESS = $request->input('DEV_ADDRESS');
                $ZIPCODE_ID = $request->input('ZIPCODE_ID');
                $USER_ID = $request->input('USER_ID');
                $USER_EMAIL = $request->input('USER_EMAIL');
                $CREATE = $request->input('DATE_CREATE');
                $MODIFY = $request->input('DATE_MODIFY');

                $name = $request->input('name');
                $surname = $request->input('surname');

                if($request->input('yyyy') == "year"){
                    $BIRTHDAY = DB::table('developers')->where('USER_ID', $USER_ID)->value('DEV_BIRTHDAY');
                    if($BIRTHDAY == null){
                        $DEV_BIRTHDAY = date('Y-m-d');
                    }else{
                        $DEV_BIRTHDAY = $BIRTHDAY;
                    }
                }else{
                    $yyyy = $request->input('yyyy');
                    $mm = $request->input('mm');
                    $dd = $request->input('dd');

                    $DEV_BIRTHDAY = $yyyy.'-'.$mm .'-'.$dd;
                }

                if($USER_EMAIL != '' || $DEV_TEL != '' || $DEV_ID_CARD != '' || $DEV_BIRTHDAY != '' || $DEV_AGE != '' || $DEV_GENDER != '' || $DEV_ADDRESS != '' || $ZIPCODE_ID != '' 
                    || $USER_ID != '' || $CREATE != '' || $MODIFY != ''){
                    $data = array("DEV_TEL"=>$DEV_TEL, "DEV_ID_CARD"=>$DEV_ID_CARD, "DEV_BIRTHDAY"=>$DEV_BIRTHDAY,
                                "DEV_AGE"=>$DEV_AGE, "DEV_GENDER"=>$DEV_GENDER, "DEV_ADDRESS"=>$DEV_ADDRESS, "ZIPCODE_ID"=>$ZIPCODE_ID, "USER_ID"=>$USER_ID,
                                "USER_EMAIL" => $USER_EMAIL, "DATE_CREATE"=>$CREATE, "DATE_MODIFY"=>$MODIFY, "name"=>$name, "surname"=>$surname);
                                // die('<pre>'. print_r($data, 1));
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
        return redirect()->action('UploadImageProfile@Developer');
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

                $deleteImg = DB::table('guest_users')->where('USER_ID', Auth::user()->id)->value('GUEST_USERS_IMG');
                if($deleteImg != "No_Img.jpg"){
                    $pathDeleteImg = 'home/imgProfile/'.$deleteImg;
                    if(File::exists(public_path($pathDeleteImg))){
                        File::delete(public_path($pathDeleteImg));
                    }
                }

                $validate = $request->validate([
                    'GUEST_USERS_TEL' => ['required', 'string', 'min:10', 'max:10', 'regex:/[08|09|06]\d{8}$/'],
                    'GUEST_USERS_ID_CARD' => ['required', 'string', 'min:13', 'max:13', 'regex:/^\d{13}$/'],
                    'name' => ['required', 'string', 'min:2', 'max:255', 'regex:/^[.\D]*$/'],
                    'surname' => ['required', 'string', 'min:2', 'max:255', 'regex:/^[.\D]*$/'],
                    // 'img_name' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5000',
                    // '' => ['', '', '', '', ''],
                    
                ]);
                
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

                $name = $request->input('name');
                $surname = $request->input('surname');

                if($request->input('yyyy') == "year"){
                    $BIRTHDAY = DB::table('guest_users')->where('USER_ID', $USER_ID)->value('GUEST_USERS_BIRTHDAY');
                    if($BIRTHDAY == null){
                        $GUEST_USERS_BIRTHDAY = date('Y-m-d');
                    }else{
                        $GUEST_USERS_BIRTHDAY = $BIRTHDAY;
                    }
                }else{
                    $yyyy = $request->input('yyyy');
                    $mm = $request->input('mm');
                    $dd = $request->input('dd');

                    $GUEST_USERS_BIRTHDAY = $yyyy.'-'.$mm .'-'.$dd;
                }

                if($USER_EMAIL != '' || $GUEST_USERS_TEL != '' || $GUEST_USERS_ID_CARD != '' || $GUEST_USERS_IMG != '' || $GUEST_USERS_BIRTHDAY != '' || $GUEST_USERS_AGE != '' 
                    || $GUEST_USERS_GENDER != '' || $GUEST_USERS_ADDRESS != '' || $ZIPCODE_ID != '' || $USER_ID != '' || $CREATE != '' || $MODIFY != ''){
                    $data = array("GUEST_USERS_TEL"=>$GUEST_USERS_TEL, "GUEST_USERS_ID_CARD"=>$GUEST_USERS_ID_CARD, "GUEST_USERS_IMG"=>$GUEST_USERS_IMG, "GUEST_USERS_BIRTHDAY"=>$GUEST_USERS_BIRTHDAY,
                                "GUEST_USERS_AGE"=>$GUEST_USERS_AGE, "GUEST_USERS_GENDER"=>$GUEST_USERS_GENDER, "GUEST_USERS_ADDRESS"=>$GUEST_USERS_ADDRESS, "ZIPCODE_ID"=>$ZIPCODE_ID, "USER_ID"=>$USER_ID,
                                "USER_EMAIL" => $USER_EMAIL, "DATE_CREATE"=>$CREATE, "DATE_MODIFY"=>$MODIFY, "name"=>$name, "surname"=>$surname);
                    // dd($data);
                    // Insert && Update
                    $value = Guest_user::InsertAndUpdateData($data);
                    if($value){
                        Session::flash('message','Insert successfully.');
                    }else{
                        Session::flash('message','Username already exists.');
                    }
                }
            }else{
                // $request = (array)$request;
                // dd(getType($request));
                $validate = $request->validate([
                    'GUEST_USERS_TEL' => ['required', 'string', 'min:10', 'max:10', 'regex:/[08|09|06]\d{8}$/'],
                    'GUEST_USERS_ID_CARD' => ['required', 'string', 'min:13', 'max:13', 'regex:/^\d{13}$/'],
                    'name' => ['required', 'string', 'min:2', 'max:255', 'regex:/^[.\D]*$/'],
                    'surname' => ['required', 'string', 'min:2', 'max:255', 'regex:/^[.\D]*$/'],
                    // '' => ['', '', '', '', ''],
                    // '' => ['', '', '', '', ''],
                    
                ]);
                // if($validate->fails()){
                //     return redirect('post/create')
                //         ->withErrors($validate)
                //         ->withInput();
                // }
                
                $GUEST_USERS_TEL = $request->input('GUEST_USERS_TEL');
                $GUEST_USERS_ID_CARD = $request->input('GUEST_USERS_ID_CARD');
                
                $GUEST_USERS_AGE = $request->input('GUEST_USERS_AGE');
                $GUEST_USERS_GENDER = $request->input('GUEST_USERS_GENDER');
                $GUEST_USERS_ADDRESS = $request->input('GUEST_USERS_ADDRESS');
                $ZIPCODE_ID = $request->input('ZIPCODE_ID');
                $USER_ID = $request->input('USER_ID');
                $USER_EMAIL = $request->input('USER_EMAIL');
                $CREATE = $request->input('DATE_CREATE');
                $MODIFY = $request->input('DATE_MODIFY');
                
                $name = $request->input('name');
                $surname = $request->input('surname');

                // $GUEST_USERS_BIRTHDAY = DB::table('guest_users')->where('USER_ID', $USER_ID)->value('GUEST_USERS_BIRTHDAY');
                // dd($GUEST_USERS_BIRTHDAY);
                if($request->input('yyyy') == "year"){
                    $BIRTHDAY = DB::table('guest_users')->where('USER_ID', $USER_ID)->value('GUEST_USERS_BIRTHDAY');
                    if($BIRTHDAY == null){
                        $GUEST_USERS_BIRTHDAY = date('Y-m-d');
                    }else{
                        $GUEST_USERS_BIRTHDAY = $BIRTHDAY;
                    }
                }else{
                    $yyyy = $request->input('yyyy');
                    $mm = $request->input('mm');
                    $dd = $request->input('dd');

                    $GUEST_USERS_BIRTHDAY = $yyyy.'-'.$mm .'-'.$dd;
                }

                if($USER_EMAIL != '' || $GUEST_USERS_TEL != '' || $GUEST_USERS_ID_CARD != '' || $GUEST_USERS_BIRTHDAY != '' || $GUEST_USERS_AGE != '' || $GUEST_USERS_GENDER != '' 
                    || $GUEST_USERS_ADDRESS != '' || $ZIPCODE_ID != '' || $USER_ID != '' || $CREATE != '' || $MODIFY != ''){
                    $data = array("GUEST_USERS_TEL"=>$GUEST_USERS_TEL, "GUEST_USERS_ID_CARD"=>$GUEST_USERS_ID_CARD, "GUEST_USERS_BIRTHDAY"=>$GUEST_USERS_BIRTHDAY,
                                "GUEST_USERS_AGE"=>$GUEST_USERS_AGE, "GUEST_USERS_GENDER"=>$GUEST_USERS_GENDER, "GUEST_USERS_ADDRESS"=>$GUEST_USERS_ADDRESS, "ZIPCODE_ID"=>$ZIPCODE_ID, "USER_ID"=>$USER_ID,
                                "USER_EMAIL" => $USER_EMAIL, "DATE_CREATE"=>$CREATE, "DATE_MODIFY"=>$MODIFY, "name"=>$name, "surname"=>$surname);
                    // $user = array("name"=>$name, "surname"=>$surname);
                    
                    // dd($data);
                    $value = Guest_user::InsertAndUpdateData($data);
                    if($value){
                        Session::flash('message','Insert successfully.');
                    }else{
                        Session::flash('message','Username already exists.');
                    }
                }
            }
        }
        return redirect()->action('UploadImageProfile@Guest_user');
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

                $deleteImg = DB::table('sponsors')->where('USER_ID', Auth::user()->id)->value('SPON_IMG');
                if($deleteImg != "No_Img.jpg"){
                    $pathDeleteImg = 'home/imgProfile/'.$deleteImg;
                    if(File::exists(public_path($pathDeleteImg))){
                        File::delete(public_path($pathDeleteImg));
                    }
                }

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