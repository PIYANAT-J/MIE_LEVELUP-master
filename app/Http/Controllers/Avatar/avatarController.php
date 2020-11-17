<?php

namespace App\Http\Controllers\Avatar;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use DB;
use Auth;

use App\Guest_user;
use App\Default_item;
use App\Transeection_buyItem;
use App\TransferPayment;
use App\Market_item;
use App\My_item;

class avatarController extends Controller
{
    public function Avatar(){
        $guest_user = DB::table('guest_users')->where('USER_EMAIL', Auth::user()->email)->get();
        $userKyc = DB::table('kycs')->where('USER_EMAIL', Auth::user()->email)->first();
        $shopping = DB::table('shopping_cart')->where([['USER_EMAIL', Auth::user()->email], ['shopping_cart_status', 'false']])->get();
        $default = Default_item::all();
        $item = My_item::where([['USER_EMAIL', Auth::user()->email]])->get();
        foreach($guest_user as $defaultAvatar){
            $avatar = json_decode($defaultAvatar->AVATAR);
        }
        return view('avatar.avatar', compact('guest_user', 'avatar', 'userKyc', 'shopping', 'default', 'item', 'avatar'));
    }

    public function AvatarOrderList(){
        $guest_user = DB::table('guest_users')->where('USER_EMAIL', Auth::user()->email)->get();
        $userKyc = DB::table('kycs')->where('USER_EMAIL', Auth::user()->email)->first();
        $shopping = DB::table('shopping_cart')->where([['USER_EMAIL', Auth::user()->email], ['shopping_cart_status', 'false']])->get();
        $transeection = Transeection_buyItem::where([['USER_EMAIL', Auth::user()->email]])->orderBy('transeection_id', 'desc')->get();
        $transfer = TransferPayment::where([['USER_EMAIL', Auth::user()->email], ['transferStatus', 'รอการอนุมัติ'], ['useTransferType', 'item']])->orderBy('id', 'desc')->get();
        $transfer_on = TransferPayment::where([['USER_EMAIL', Auth::user()->email], ['transferStatus', 'ยืนยันการโอน'], ['useTransferType', 'item']])->orderBy('id', 'desc')->get();
        // dd($transfer_on);
        $transfer_invoice = array();
        foreach($transfer as $transferList){
            $transfer_invoice[] = $transferList->transferInvoice;
        }
        $address = DB::table('addresses')->where('USER_EMAIL', Auth::user()->email)->get();
        $marketItem = Market_item::all();
        if(count($address) != 0){
            return view('avatar.avatar_order_list', compact('guest_user', 'userKyc', 'shopping', 'transeection', 'address', 'transfer_invoice', 'transfer_on', 'marketItem'));
        }
        return view('avatar.avatar_order_list', compact('guest_user', 'userKyc', 'shopping', 'transeection', 'transfer_invoice', 'transfer_on', 'marketItem'));
    }

    public function addAvatar(Request $request){
        if($request->input('submit') != null){
            // dd($request);
            $avatar = [];
            if($request->input('genderchecked') == 'man'){
                array_push($avatar, ([
                    'eyes' => $request->input('manEyes'),
                    'hair' => $request->input('manHair'),
                    'armor' => $request->input('manArmor'),
                    'crown' => $request->input('manCrown'),
                    'gender' => $request->input('genderchecked'),
                    'gloves' => $request->input('manGloves'),
                    'weapon' => $request->input('manWeapon'),
                    'clothes' => $request->input('manClothes'),
                    'glasses' => $request->input('manGlasses')
                ]));
            }else{
                array_push($avatar, ([
                    'eyes' => $request->input('womanEyes'),
                    'hair' => $request->input('womanHair'),
                    'armor' => $request->input('womanArmor'),
                    'crown' => $request->input('womanCrown'),
                    'gender' => $request->input('genderchecked'),
                    'gloves' => $request->input('womanGloves'),
                    'weapon' => $request->input('womanWeapon'),
                    'clothes' => $request->input('womanClothes'),
                    'glasses' => $request->input('womanGlasses')
                ]));
            }
            // dd($avatar);
            DB::table('guest_users')->where('USER_EMAIL', Auth::user()->email)->update(array('AVATAR' => $avatar));
            return back()->with("success", "บันทึกตัวละครเรียบร้อย");
        }
    }
}
