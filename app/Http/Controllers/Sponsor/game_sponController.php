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
            $countCart = DB::table('sponsor_shopping_cart')->where([['sponsor_shopping_cart.USER_ID', Auth::user()->id], ['sponsor_shopping_cart.sponsor_cart_status', 'false']])
                            ->join('games', 'games.GAME_ID', 'sponsor_shopping_cart.sponsor_cart_game')
                            ->select('sponsor_shopping_cart.*', 'games.GAME_NAME', 'games.RATED_B_L', 'games.GAME_DISCOUNT', 'games.GAME_IMG_PROFILE')
                            ->get();
            // dd($packageGame);
            return view('profile.sponsor.advt_add_game', compact('sponsor', 'game', 'package', 'packageGame', 'countCart'));
        }elseif($idMD == 1){
            $sponsor = DB::table('sponsors')->where('USER_EMAIL', Auth::user()->email)->get();
            $game = DB::table('games')->where('GAME_STATUS','อนุมัติ')->get();
            $package = DB::table('my_package_buy')->where([['my_package_buy.package_id', decrypt($id)], ['my_package_buy.USER_EMAIL', Auth::user()->email]])
                            ->join('packages','packages.package_id','my_package_buy.package_id')
                            ->select('my_package_buy.*', 'packages.package_game', 'packages.package_length')
                            ->first();
            $packageGame = json_decode($package->packageBuy_gameSpon);
            $modal = 1;
            $countCart = DB::table('sponsor_shopping_cart')->where([['sponsor_shopping_cart.USER_ID', Auth::user()->id], ['sponsor_shopping_cart.sponsor_cart_status', 'false']])
                            ->join('games', 'games.GAME_ID', 'sponsor_shopping_cart.sponsor_cart_game')
                            ->select('sponsor_shopping_cart.*', 'games.GAME_NAME', 'games.RATED_B_L', 'games.GAME_DISCOUNT', 'games.GAME_IMG_PROFILE')
                            ->get();
            // dd($package);
            return view('profile.sponsor.advt_add_game', compact('sponsor', 'game', 'package', 'modal', 'packageGame', 'countCart'));
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

    public function listGame(Request $req){
        if($req->input('submit') != null){
            $sponsor_cart_game = $req->input('game_id');
            $sponsor_cart_price = $req->input('game_price');
            $sponsor_cart_advt = $req->input('advt_id');
            $sponsor_cart_package = $req->input('packageBuy_id');
            $start = explode('T', $req->input('dateStart'));
            $deadline = explode('T', $req->input('dateDeadline'));
            // dd($deadline[0].' '.$deadline[1]);
            $sponsor_cart_start = $start[0].' '.$start[1];
            $sponsor_cart_deadline = $deadline[0].' '.$deadline[1];
            $sponsor_cart_number = $req->input('numberAdvt');
            $USER_ID = Auth::user()->id;
            $USER_EMAIL = Auth::user()->email;

            $data = array("sponsor_cart_game"=>$sponsor_cart_game, "sponsor_cart_price"=>$sponsor_cart_price, "sponsor_cart_advt"=>$sponsor_cart_advt,
                        "sponsor_cart_package"=>$sponsor_cart_package, "sponsor_cart_start"=>$sponsor_cart_start, "sponsor_cart_deadline"=>$sponsor_cart_deadline, 
                        "sponsor_cart_number"=>$sponsor_cart_number, "USER_ID"=>$USER_ID, "USER_EMAIL"=>$USER_EMAIL);

            // dd($data);
            Package::cartGame($data);
        }
        return back()->with("success", "ทำรายการสำเร็จ");
    }

    public function SponShoppingCart(){
        $sponsor = DB::table('sponsors')->where('USER_EMAIL', Auth::user()->email)->get();
        $countCart = DB::table('sponsor_shopping_cart')->where([['sponsor_shopping_cart.USER_ID', Auth::user()->id], ['sponsor_shopping_cart.sponsor_cart_status', 'false']])
                            ->join('games', 'games.GAME_ID', 'sponsor_shopping_cart.sponsor_cart_game')
                            ->select('sponsor_shopping_cart.*', 'games.GAME_NAME', 'games.RATED_B_L', 'games.GAME_DISCOUNT', 'games.GAME_IMG_PROFILE')
                            ->get();
        // dd($countCart);
        return view('profile.sponsor.spon_shopping_cart', compact('sponsor', 'countCart'));
    }

    public function SponShoppingCartPayment(Request $req){
        if($req->input('submit') != null){
            $transeection_amount = $req->input('sumTotal');
            // $start = explode(', ', $req->input('gameId'));
            // $gameId = [];
            // for($i=0;$i<count($start);$i++){
            //     array_push($gameId, ([
            //         'gameId' => $start[$i]
            //     ]));
            // }
            $transeection_gameSpon = $req->input('gameId');
            $USER_ID = Auth::user()->id;
            $USER_EMAIL = Auth::user()->email;

            $data = array("transeection_amount"=>$transeection_amount, "transeection_gameSpon"=>$transeection_gameSpon, "USER_ID"=>$USER_ID, "USER_EMAIL"=>$USER_EMAIL);
            // dd($data);
            Package::cartPayment($data);
            // dd("YES");
            return redirect(route('packagePay', ['id'=>encrypt('list')]));
        }
    }
}
