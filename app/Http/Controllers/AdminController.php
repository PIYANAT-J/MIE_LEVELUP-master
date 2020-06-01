<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
