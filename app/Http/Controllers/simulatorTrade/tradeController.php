<?php

namespace App\Http\Controllers\simulatorTrade;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use DB;
use Auth;

use App\simulator_trade;

class tradeController extends Controller
{
    public function SimulatorTrade(){
        $guest_user = DB::table('guest_users')->where('USER_EMAIL', Auth::user()->email)->get();
        $userKyc = DB::table('kycs')->where('USER_EMAIL', Auth::user()->email)->first();
        $shopping = DB::table('shopping_cart')->where([['USER_EMAIL', Auth::user()->email], ['shopping_cart_status', 'false']])->get();
        $trade = $this->getDataTrade();
        $trade1 = $trade[0];
        // dd($trade1);
        foreach($guest_user as $defaultAvatar){
            $avatar = json_decode($defaultAvatar->AVATAR);
        }
        return view('avatar.simulator_trade.simulator_trade', compact('guest_user', 'userKyc', 'trade1', 'trade', 'shopping', 'avatar'));
    }

    public function getDataTrade(){
        $client = new \GuzzleHttp\Client();
        $api_response = $client->get('https://dev-api.shrimpy.io/v1/exchanges/kucoin/ticker');
        $response = json_decode($api_response->getBody());
        return $response;
    }

    public function MyTrade(){
        $guest_user = DB::table('guest_users')->where('USER_EMAIL', Auth::user()->email)->get();
        $userKyc = DB::table('kycs')->where('USER_EMAIL', Auth::user()->email)->first();
        $shopping = DB::table('shopping_cart')->where([['USER_EMAIL', Auth::user()->email], ['shopping_cart_status', 'false']])->get();
        foreach($guest_user as $defaultAvatar){
            $avatar = json_decode($defaultAvatar->AVATAR);
        }
        return view('avatar.simulator_trade.my_trade', compact('guest_user', 'userKyc', 'shopping', 'avatar'));
    }

    public function MyTradeDetail(){
        $guest_user = DB::table('guest_users')->where('USER_EMAIL', Auth::user()->email)->get();
        $userKyc = DB::table('kycs')->where('USER_EMAIL', Auth::user()->email)->first();
        $shopping = DB::table('shopping_cart')->where([['USER_EMAIL', Auth::user()->email], ['shopping_cart_status', 'false']])->get();
        foreach($guest_user as $defaultAvatar){
            $avatar = json_decode($defaultAvatar->AVATAR);
        }
        return view('avatar.simulator_trade.my_trade_detail', compact('guest_user', 'userKyc', 'shopping', 'avatar'));
    }

    public function RankingTrade(){
        $guest_user = DB::table('guest_users')->where('USER_EMAIL', Auth::user()->email)->get();
        $userKyc = DB::table('kycs')->where('USER_EMAIL', Auth::user()->email)->first();
        $shopping = DB::table('shopping_cart')->where([['USER_EMAIL', Auth::user()->email], ['shopping_cart_status', 'false']])->get();
        foreach($guest_user as $defaultAvatar){
            $avatar = json_decode($defaultAvatar->AVATAR);
        }
        return view('avatar.simulator_trade.ranking_trade', compact('guest_user', 'userKyc', 'shopping', 'avatar'));
    }

    public function RealInvestors(){
        $guest_user = DB::table('guest_users')->where('USER_EMAIL', Auth::user()->email)->get();
        $userKyc = DB::table('kycs')->where('USER_EMAIL', Auth::user()->email)->first();
        $shopping = DB::table('shopping_cart')->where([['USER_EMAIL', Auth::user()->email], ['shopping_cart_status', 'false']])->get();
        foreach($guest_user as $defaultAvatar){
            $avatar = json_decode($defaultAvatar->AVATAR);
        }
        return view('avatar.realTarde.real_investors', compact('guest_user', 'userKyc', 'shopping', 'avatar'));
    }

    public function getSimulatorTrade(Request $request){
        $simulator = simulator_trade::all();
        $random = random_int(0, count($simulator));
        // dd(count($simulator), $random);
        $dataSimulator = simulator_trade::where('id', $random)->first();
        return response()->json([
                'symbol'=>$dataSimulator->symbol,
                'date'=>$dataSimulator->date,
                'open'=>$dataSimulator->open,
                'high'=>$dataSimulator->high,
                'low'=>$dataSimulator->low,
                'close'=>$dataSimulator->close,
                'p_chg_'=>number_format($dataSimulator->p_chg_, 2)
            ]);
    }
}
