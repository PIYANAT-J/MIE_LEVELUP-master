<?php

namespace App\Http\Controllers\Sponsor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Sponsors;
use Image;
use File;
use Auth;
use DB;

class productController extends Controller
{
    public function ProductSupport(){
        $sponsor = DB::table('sponsors')->where('USER_EMAIL', Auth::user()->email)->get();
        return view('profile.sponsor.product_support', compact('sponsor'));
    }

    public function ProductSupportSelect(){
        $sponsor = DB::table('sponsors')->where('USER_EMAIL', Auth::user()->email)->get();
        $game = DB::table('games')->where('GAME_STATUS','อนุมัติ')->get();
        return view('profile.sponsor.product_support_select', compact('sponsor', 'game'));
    }

    public function SponShelf(){
        $count = DB::table('products')->where('USER_EMAIL', Auth::user()->email)->get();
        if($count->count() == 0){
            $sponsor = DB::table('sponsors')->where('USER_EMAIL', Auth::user()->email)->get();
            $game = DB::table('games')->where('GAME_STATUS','อนุมัติ')->get();
            $package = DB::table('my_package_buy')->where([['my_package_buy.USER_EMAIL', Auth::user()->email]])
                            ->join('packages','packages.package_id','my_package_buy.package_id')
                            ->select('my_package_buy.*', 'packages.package_game', 'packages.package_length')
                            ->first();
            $packageGame = json_decode($package->packageBuy_gameSpon);
            return view('profile.game.sponlvp_shelf', compact('sponsor', 'game', 'package', 'packageGame'));
        }else{
            $sponsor = DB::table('sponsors')->where('USER_EMAIL', Auth::user()->email)->get();
            $product = DB::table('products')->where('USER_EMAIL', Auth::user()->email)->get();
            $game = DB::table('games')->where('GAME_STATUS','อนุมัติ')->get();
            $package = DB::table('my_package_buy')->where([['my_package_buy.USER_EMAIL', Auth::user()->email]])
                            ->join('packages','packages.package_id','my_package_buy.package_id')
                            ->select('my_package_buy.*', 'packages.package_game', 'packages.package_length')
                            ->get();
            // dd($package);
            // $packageGame = json_decode($package->packageBuy_gameSpon);
            // dd($package);
            return view('profile.game.sponlvp_shelf', compact('sponsor', 'product', 'game', 'package'));
        }
    }

    public function addProduct(Request $request){
        if($request->input('submit') != null){
            // dd(date('Y-m-d'));
            if($request->has('product_img')){
                $upload = $request->file('product_img');
                $img_name = 'product_img_'.time().'.'.$upload->getClientOriginalExtension();
                $path = public_path('section\product\product_img');
                $resize_image = Image::make($upload->getRealPath());
                $resize_image->resize(300, 300, function($constraint){
                    $constraint->aspectRatio();
                    })->save($path . '/' . $img_name);
                $upload->move($path, $img_name);

                $product_name = $request->input('product_name');
                $product_img = $img_name;
                $product_amount = $request->input('product_amount');
                $product_point = $request->input('product_point');
                $product_description = $request->input('product_description');
                $product_date_create = date('Y-m-d');
                $USER_ID = Auth::user()->id;
                $USER_EMAIL = Auth::user()->email;

                if($request->input('yyyy') == "year"){
                    return back()->with("deadline", "กรุณากำหนดวันหมดอายุ");
                }else{
                    $yyyy = $request->input('yyyy');
                    $mm = $request->input('mm');
                    $dd = $request->input('dd');
                    $product_deadline = $yyyy.'-'.$mm .'-'.$dd;
                }
                $data = array("product_name"=>$product_name, "product_img"=>$product_img, "product_amount"=>$product_amount, "product_point"=>$product_point, 
                                "product_description"=>$product_description, "product_date_create"=>$product_date_create, "USER_ID"=>$USER_ID, "USER_EMAIL"=>$USER_EMAIL, 
                                "product_deadline"=>$product_deadline);
                // dd($data);
                $value = Sponsors::productData($data);
            }else{
                return back()->with("product", "กรุณาเลือกรูปสินค้า");
            }
        }
        return redirect()->back();
    }
}
