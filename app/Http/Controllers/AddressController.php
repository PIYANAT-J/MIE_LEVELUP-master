<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Auth;

use App\Address;

class AddressController extends Controller
{
    public function addAddress(Request $request){
        if($request->input('submit') != null){
            // dd($request);
            $accept = $request->input('accept_01');
            if(isset($accept)){
                DB::table('addresses')
                    ->where([['addresses_status', 'true'], ['USER_EMAIL', Auth::user()->email]])
                    ->update(['addresses_status'=>'false']);

                $address = new Address();
                $address->addresses = $request->input('addresses');
                $address->province = $request->input('province');
                $address->amphure = $request->input('amphure');
                $address->district = $request->input('district');
                $address->zipcode = $request->input('zipcode');
                $address->addresses_status = "true";
                $address->USER_ID = Auth::user()->id;
                $address->USER_EMAIL = Auth::user()->email;
                $address->save();
                
                return back()->with("success","เพิ่มที่อยู่เรียบร้อย");
            }else{
                $address = new Address();
                $address->addresses = $request->input('addresses');
                $address->province = $request->input('province');
                $address->amphure = $request->input('amphure');
                $address->district = $request->input('district');
                $address->zipcode = $request->input('zipcode');
                $address->addresses_status = "false";
                $address->USER_ID = Auth::user()->id;
                $address->USER_EMAIL = Auth::user()->email;
                $address->save();

                return back()->with("success","เพิ่มที่อยู่เรียบร้อย");
            }
        }
    }

    public function deleteAddress(Request $request){
        if($request->input('deleteAddress') == "deleteAddress"){
            // dd("Delete");
            $address_id = $request->input('addresses_id');
            // $address = DB::table('addresses')->where('addresses_id', $request->input('addresses_id'))->first();
            DB::table('addresses')->where('addresses_id', $address_id)->delete();
            return back()->with("Delete", "ลบที่อยู่เรียบร้อย");
        }else{
            // dd($request);
            if($request->input('changeAddID') != null){
                DB::table('addresses')
                    ->where([['addresses_status', 'true'], ['USER_EMAIL', Auth::user()->email]])
                    ->update(['addresses_status'=>'false']);
                if($request->input('changeAddID') != null){
                    DB::table('addresses')
                        ->where([['addresses_id', $request->input('changeAddID')], ['USER_EMAIL', Auth::user()->email]])
                        ->update(['addresses_status'=>'true']);
                }
            }
            return back();
        }
    }
}
