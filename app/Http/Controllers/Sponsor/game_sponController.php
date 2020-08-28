<?php

namespace App\Http\Controllers\Sponsor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use DB;
use Auth;

use App\Package;

class game_sponController extends Controller
{
    public function AdvtAddGame($id, $idM){
        // dd($idM,$id);
        $idMD = decrypt($idM);
        if($idMD == 0){
            $sponsor = DB::table('sponsors')->where('USER_EMAIL', Auth::user()->email)->get();
            $game = DB::table('games')->where('GAME_STATUS','อนุมัติ')->get();
            $package = DB::table('my_package_buy')->where([['my_package_buy.package_id', decrypt($id)], ['my_package_buy.USER_EMAIL', Auth::user()->email]])
                            ->join('packages','packages.package_id','my_package_buy.package_id')
                            ->select('my_package_buy.*', 'packages.package_game', 'packages.package_length')
                            ->first();
            $packageGame = json_decode($package->packageBuy_gameSpon);
            // dd($packageGame);
            return view('profile.sponsor.advt_add_game', compact('sponsor', 'game', 'package', 'packageGame'));
        }elseif($idMD == 1){
            $sponsor = DB::table('sponsors')->where('USER_EMAIL', Auth::user()->email)->get();
            $game = DB::table('games')->where('GAME_STATUS','อนุมัติ')->get();
            $package = DB::table('my_package_buy')->where([['my_package_buy.package_id', decrypt($id)], ['my_package_buy.USER_EMAIL', Auth::user()->email]])
                            ->join('packages','packages.package_id','my_package_buy.package_id')
                            ->select('my_package_buy.*', 'packages.package_game', 'packages.package_length')
                            ->first();
            $packageGame = json_decode($package->packageBuy_gameSpon);
            $modal = 1;
            // dd($package);
            return view('profile.sponsor.advt_add_game', compact('sponsor', 'game', 'package', 'modal', 'packageGame'));
        }
    }

    public function sponsorGame(Request $req){
        // dd($req);
        if($req->input('addGame') == 'addGame'){
            $packageBuy_game = $req->input('packageBuy_game');
            $packageBuy_invoice = $req->input('packageBuy_invoice');
            $idM = 1;
            $id = $req->input('package_id');
            $data = array("packageBuy_game"=>$packageBuy_game, "packageBuy_invoice"=>$packageBuy_invoice);
            Package::gamePackage($data);
            
            return redirect(route('AdvtAddGame', ['id'=> encrypt($id), 'idM' => encrypt($idM)]));
        }else{
            $packageBuy_invoice = $req->input('packageBuy_invoice');
            $id = $req->input('package_id');
            $package = DB::table('my_package_buy')
                            ->where([['package_id', $id], ['USER_EMAIL', Auth::user()->email]])
                            ->value('packageBuy_gameSpon');
            $packageGame = [];
            for($i=0; $i<=$req->input('key'); $i++){
                if($req->input('game_id'.$i) != null){
                    array_push($packageGame,([
                        // 'gameid' => $req->input('game_id'.$i)=>[$req->input('dateStart'.$i),$req->input('dateDeadline'.$i)]
                        'gameid' => $req->input('game_id'.$i),
                        'start' => $req->input('dateStart'.$i),
                        'deadline' => $req->input('dateDeadline'.$i)
                        ]));
                }
            }
            // array_push($packageBuy_gameSpon,json_decode($package));
            if($package != null){
                $packageBuy_gameSpon = array_merge($packageGame,json_decode($package));
            }else{
                $packageBuy_gameSpon = $packageGame;
            }
            
            // dd($packageBuy_gameSpon);
            $data = array("packageBuy_gameSpon"=>$packageBuy_gameSpon, "packageBuy_invoice"=>$packageBuy_invoice);
            // dd($data);
            Package::gamePackage($data);
            return redirect(route('AdvtManagement', ['id'=> encrypt($id)]));
        }
    }
}
