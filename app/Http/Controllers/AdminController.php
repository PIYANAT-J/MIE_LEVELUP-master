<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Admin;
use App\Package;
use App\My_item;
use App\Market_item;
use App\Transeection_buyItem;

use Auth;
use DB;


class AdminController extends Controller
{
    public function addAdmin(){
        $admin = DB::table('users')->where('users_type', '0')->get();
        return view('admin_lvp.admin_management', compact('admin'));
    }

    public function AvatarManagement(){
        $admin = DB::table('users')->where('users_type', '0')->get();
        return view('admin_lvp.avatar_management', compact('admin'));
    }

    public function Package(){
        $admin = DB::table('users')->where('users_type', '0')->get();
        $package = DB::table('packages')->get();
        $advertising = DB::table('advertising_links')->get();
        return view('admin_lvp.admin_package.package_management', compact('admin', 'package', 'advertising'));
    }

    public function Advertisement(){
        $admin = DB::table('users')->where('users_type', '0')->get();
        $package = DB::table('users')->where('users.users_type', '>', '2')
                        ->join('transfer_payments', 'transfer_payments.user_id', 'users.id')
                        ->where([['transfer_payments.transferStatus', '!=', 'ยืนยันการโอน']])
                        ->join('my_package_buy', 'my_package_buy.packageBuy_invoice', 'transfer_payments.transferInvoice')
                        ->orderBy('transfer_payments.id', 'desc')
                        ->get();

        $transeection = DB::table('users')->where('users.users_type', '>', '2')
                        ->join('transfer_payments', 'transfer_payments.user_id', 'users.id')
                        ->where([['transfer_payments.transferStatus', '!=', 'ยืนยันการโอน']])
                        ->join('transeection_sponshopping', 'transeection_sponshopping.transeection_invoice', 'transfer_payments.transferInvoice')
                        ->orderBy('transfer_payments.id', 'desc')
                        ->get();

        $transfer = array_merge(json_decode($package), json_decode($transeection));
        // dd($transfer);
        // $package = DB::table('my_package_buy')->where('packageBuy_status', 'false')->get();
        // $transeection = DB::table('transeection_sponshopping')->where('transeection_status', 'false')->get();
        // dd(date('Y-m-d H:i:s'));
        return view('admin_lvp.admin_topup.ads_management', compact('transfer'));
    }

    public function Product(){
        $admin = DB::table('users')->where('users_type', '0')->get();
        $product = DB::table('users')
                        ->join('products', 'products.USER_ID', 'users.id')
                        ->where('products.product_status' ,'!=', 'หมดอายุ')
                        ->orderBy('products.product_id', 'desc')
                        ->get();
        // dd($product);
        return view('admin_lvp.admin_product.product', compact('product'));
    }

    public function kycUsers(){
        $kyc = DB::table('users')->where('users.users_type', '1')
                    ->join('kycs', 'kycs.USER_EMAIL', 'users.email')
                    ->orderBy('kycs.KYC_ID', 'desc')
                    ->get();
        return view('admin_lvp.admin_kyc.user_management', compact('kyc'));
    }
    public function kycDev(){
        $kyc = DB::table('users')->where('users.users_type', '2')
                    ->join('kycs', 'kycs.USER_EMAIL', 'users.email')
                    ->orderBy('kycs.KYC_ID', 'desc')
                    ->get();
        return view('admin_lvp.admin_kyc.dev_management', compact('kyc'));
    }
    public function kycSpon(){
        $kyc = DB::table('users')->where('users.users_type', '3')
                    ->join('kycs', 'kycs.USER_EMAIL', 'users.email')
                    ->orderBy('kycs.KYC_ID', 'desc')
                    ->get();
        return view('admin_lvp.admin_kyc.spon_management', compact('kyc'));
    }

    public function gameDev(){
        $game = DB::table('users')
                    ->join('games', 'games.USER_ID', 'users.id')
                    ->orderBy('games.GAME_ID', 'desc')
                    ->get();
        $gameImg = DB::table('game_imgaes')->get();
        return view('admin_lvp.admin_game.game_management', compact('game', 'gameImg'));
    }

    public function transfer(){
        $transfer = DB::table('users')->where('users.users_type', '!=', '3')
                        ->join('transfer_payments', 'transfer_payments.user_id', 'users.id')
                        ->where([['transfer_payments.transferStatus', '!=', 'ยืนยันการโอน']])
                        ->orderBy('transfer_payments.id', 'desc')
                        ->get();
        // dd($transfer);
        // dd(date('Y-m-d H:i:s'));
        return view('admin_lvp.admin_topup.topup_management', compact('transfer'));
    }

    public function withDraw(){
        $withdraw = DB::table('users')
                        ->join('withdraws', 'withdraws.user_id', 'users.id')
                        ->join('mybanks', 'mybanks.accountNumber', 'withdraws.withdrawBank_account')
                        ->orderBy('withdraws.id', 'desc')
                        ->get();
        // dd($withdraw);
        return view('admin_lvp.admin_topup.withdraw_management', compact('withdraw'));
    }

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
            $ADMIN_NAME = Auth::user()->name.'-'.Auth::user()->surname;

            if($KYC_ID != '' && $KYC_STATUS != '' && $KYC_APPROVE_DATE != '' && $ADMIN_NAME != ''){
                $data = array("KYC_ID"=>$KYC_ID, "KYC_STATUS"=>$KYC_STATUS, "KYC_APPROVE_DATE"=>$KYC_APPROVE_DATE, "ADMIN_NAME"=>$ADMIN_NAME);
                // die('<pre>'. print_r($data, 1));
                $value = Admin::ApproveKyc($data);
            }
        }
        return redirect()->action('AdminController@kycUsers');
    }

    public function approveGame(Request $request){
        if($request->input('submit') != null){
            // dd($request->input('accept_01'));
            if($request->input('accept_01') == 'on'){
                $GAME_ID = $request->input('GAME_ID');
                $GAME_STATUS = "อนุมัติ";
                $GAME_APPROVE_DATE = $request->input('GAME_APPROVE_DATE');
                $ADMIN_NAME = Auth::user()->name.'-'.Auth::user()->surname;
                if($GAME_ID != '' && $GAME_STATUS != '' && $GAME_APPROVE_DATE != '' && $ADMIN_NAME != ''){
                    $data = array("GAME_ID"=>$GAME_ID, "GAME_STATUS"=>$GAME_STATUS, "GAME_APPROVE_DATE"=>$GAME_APPROVE_DATE, "ADMIN_NAME"=>$ADMIN_NAME);
                    // dd($data);
                    $value = Admin::ApproveGame($data);
                }
            }
        }
        return redirect()->action('AdminController@gameDev');
    }

    public function approveTransfer(Request $request){
        if($request->input('submit') != null){
            $id = $request->input('id');
            $transferStatus = $request->input('transferStatus');
            $confirm_at = date('Y-m-d H:i:s');
            $admin_name = Auth::user()->name.'-'.Auth::user()->surname;

            if($id != '' && $transferStatus != '' && $confirm_at != '' && $admin_name != ''){
                $data = array("id"=>$id, "transferStatus"=>$transferStatus, "confirm_at"=>$confirm_at, "admin_name"=>$admin_name);
                $value = Admin::appTransfer($data);

                $package = DB::table('my_package_buy')->where('packageBuy_invoice', $request->input('transferInvoice'))->first();
                if($package != null){
                    $packageBuy_start = date('Y-m-d');
                    $Y = date('Y');
                    $m = date('m')+$package->packageBuy_season;
                    $d = date('d');
                    $packageBuy_deadline = $Y.'-'.$m.'-'.$d;
                    $dataPackage = array("packageBuy_invoice"=>$request->input('transferInvoice'), "packageBuy_start"=>$packageBuy_start, "packageBuy_deadline"=>$packageBuy_deadline,
                                        "packageBuy_status"=>"true"
                                    );
                    DB::table('my_package_buy')
                        ->where('packageBuy_invoice', $dataPackage['packageBuy_invoice'])
                        ->update($dataPackage);

                    return back()->with("success", "อนุมัตแล้ว");
                }else{
                    $transeection = DB::table('transeection_sponshopping')->where('transeection_invoice', $request->input('transferInvoice'))->first();
                    if($transeection != null){
                        $game = explode(", ", $transeection->transeection_gameSpon);
                        $gameSpon = [];
                        for($i=0;$i<count($game);$i++){
                            $shopping = DB::table('sponsor_shopping_cart')->where([['sponsor_cart_game', $game[$i]], ['USER_ID', $transeection->USER_ID], ['sponsor_cart_status', 'false']])->first();
                            
                            $sponsor_cart_id = $shopping->sponsor_cart_id;
                            $sponsor_cart_status = "true";
                            $data = array("sponsor_cart_id"=>$sponsor_cart_id, "sponsor_cart_status"=>$sponsor_cart_status);
                            Package::cartGameUpdate($data);

                            $start = explode(" ", $shopping->sponsor_cart_start);
                            $deadline = explode(" ", $shopping->sponsor_cart_deadline);
                            array_push($gameSpon, ([
                                'gameid' => $shopping->sponsor_cart_game,
                                'start' => $start[0].'T'.$start[1],
                                'deadline' => $deadline[0].'T'.$deadline[1]
                            ]));
                        }
                        
                        $data = array("transeection_invoice"=>$request->input('transferInvoice'), "transeection_status"=>"true", "transeection_gameSpon"=>$gameSpon);
                        Package::transeectionPaymentUpdate($data);

                        $dataDelete = array("transeection_type"=>$transeection->transeection_type, "USER_ID"=>$transeection->USER_ID);
                        Package::transeectionPaymentDelete($dataDelete);
                        
                    }else{
                        $transeection_item = Transeection_buyItem::where('transeection_invoice', $request->input('transferInvoice'))->first();
                        if($transeection_item != null){
                            // dd(json_decode($transeection_item->transeection_items));
                            Transeection_buyItem::where('transeection_invoice', $request->input('transferInvoice'))->update(array('transeection_status' => "true"));

                            $transee = json_decode($transeection_item->transeection_items);
                            $itemlist = array();
                            $itemamount = array();
                            $shopping_id = array();

                            $i = 0;
                            foreach($transee as $transeeList){
                                $itemlist[] = $transeeList->item_id;
                                $itemamount[] = $transeeList->item_amount;
                                $shopping_id[] = $transeeList->shopping_id;
                            }
                            for($i=0;$i<count($transee);$i++){
                                $my_item = My_item::where([['item_id', $itemlist[$i]],['USER_EMAIL', $transeection_item->USER_EMAIL]])->first();
                                $item = Market_item::where('item_id', $itemlist[$i])->first();
                                if($my_item == null){
                                    // dd("yes");
                                    $my_item = new My_item();
                                    $my_item->my_item_name = $item->item_name;
                                    $my_item->my_item_img = $item->item_img;
                                    $my_item->my_item_gender = $item->item_gender;
                                    $my_item->my_item_type = $item->item_type;
                                    $my_item->my_item_other = $item->item_other;
                                    $my_item->my_item_description = $item->item_description;
                                    $my_item->my_item_level = $item->item_level;
                                    $my_item->my_item_amount = $itemamount[$i];
                                    $my_item->item_id = $item->item_id;
                                    $my_item->USER_ID = $transeection_item->USER_ID;
                                    $my_item->USER_EMAIL = $transeection_item->USER_EMAIL;
                                    $my_item->save();
                                }else{
                                    $my_item_amount = $my_item->my_item_amount + $itemamount[$i];
                                    My_item::where('item_id', $itemlist[$i])->update(array('my_item_amount' => $my_item_amount));
                                }
                                $sumamount = $item->item_amount_discount + $itemamount[$i];
                                Market_item::where('item_id', $item->item_id)->update(array('item_amount_discount' => $sumamount));
                                // $market->item_amount_discount = $itemamount[$i];
                                // $market->save();

                                DB::table('shopping_cart')->where('shopping_cart_id', $shopping_id[$i])->update(['shopping_cart_status'=>"true"]);

                                Transeection_buyItem::where([['transeection_type', $transeection_item->transeection_type], ['transeection_status', 'false'], ['USER_EMAIL', $transeection_item->USER_EMAIL]])->delete();

                            }
                        }
                    }
                    return back()->with("success", "อนุมัตแล้ว");;
                }
            }
        }
        return redirect()->action('AdminController@transfer');
    }

    public function approveWithdraw(Request $request){
        if($request->input('submit') != null){
            // dd($request->input('accept_01'));
            if($request->input('accept_01') == 'on'){
                $id = $request->input('id');
                $withdrawStatus = "อนุมัติแล้ว";
                $confirm_at = date('Y-m-d H:i:s');
                $admin_name = Auth::user()->name.'-'.Auth::user()->surname;
                if($id != '' && $withdrawStatus != '' && $confirm_at != ''){
                    $data = array("id"=>$id, "withdrawStatus"=>$withdrawStatus, "confirm_at"=>$confirm_at);
                    // dd($data);
                    $value = Admin::approveWith($data);
                }
            }
        }
        return redirect()->action('AdminController@withDraw');
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

            $name = $request->input('name');
            $surname = $request->input('surname');
            $email = $request->input('email');
            $password = $request->input('password');
            $users_type = $request->input('users_type');

            if($name != '' && $surname != '' && $email != '' && $password != '' && $users_type != ''){
                $data = array("name"=>$name, "surname"=>$surname, "email"=>$email, "password"=>Hash::make($password) ,"users_type"=>$users_type);
                // dd($data);
                $value = Admin::createAdmin($data);
            }
        }
        return redirect()->action('AdminController@addAdmin');
    }

    public function addPackage(Request $request){
        if($request->input('submit') != null){
            // dd($request);
            $package_name = $request->input('package_name');
            $package_amount = $request->input('package_amount');
            $package_season = $request->input('package_season');
            $package_game = $request->input('package_game');
            $package_length = $request->input('package_length');
            $package_advt = $request->input('package_advt');
            $package_date_create = date('Y-m-d H:i:s');
            $USER_EMAIL = Auth::user()->email;
            $ADMIN_NAME = Auth::user()->name.' '.Auth::user()->surname; 

            $data = array("package_name"=>$package_name, "package_amount"=>$package_amount, "package_season"=>$package_season, "package_game"=>$package_game,
                        "package_length"=>$package_length, "package_advt"=>$package_advt, "package_date_create"=>$package_date_create, "USER_EMAIL"=>$USER_EMAIL, "ADMIN_NAME"=>$ADMIN_NAME);
            // dd($data);
            Admin::addPackage($data);
        }
        return back()->with("success", "เพิ่ม Package เรียบร้อย");
    }

    public function approveProduct(Request $request){
        if($request->input('submit') != null){

            $ADMIN_NAME = Auth::user()->name.' '.Auth::user()->surname;
            $data = array("product_status"=>$request->input('Approve'), "product_date_approve"=>date('Y-m-d H:i:s'), "ADMIN_NAME"=>$ADMIN_NAME);
            // dd($data);
            DB::table('products')->where('product_id', $request->input('product_id'))
                ->update($data);
            
            return back()->with("success", "อนุมัตแล้ว");
        }
    }

    public function advertising(Request $request){
        if($request->input('submit') != null){
            // dd($request);
            $admin_name = Auth::user()->name.' '.Auth::user()->surname;
            $data = array("advertising_status"=>$request->input('advertising_status'), "advertising_update"=>date('Y-m-d H:i:s'), "admin_name"=>$admin_name, "advertising_comment"=>$request->input('advertising_comment'));
            // dd($data);
            DB::table('advertising_links')->where('advertising_id', $request->input('advertising_id'))
                ->update($data);
            
            return back()->with("successADVT", "อนุมัตแล้ว");
        }
    }
}
