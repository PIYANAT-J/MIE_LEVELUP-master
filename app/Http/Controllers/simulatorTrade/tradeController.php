<?php

namespace App\Http\Controllers\simulatorTrade;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use DB;
use Auth;

class tradeController extends Controller
{
    public function SimulatorTrade(){
        $guest_user = DB::table('guest_users')->where('USER_EMAIL', Auth::user()->email)->get();
        $userKyc = DB::table('kycs')->where('USER_EMAIL', Auth::user()->email)->first();

        $trade = $this->getDataTrade();
        // dd($trade);
        return view('avatar.simulator_trade.simulator_trade', compact('guest_user', 'userKyc', 'trade'));
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
        return view('avatar.simulator_trade.my_trade', compact('guest_user', 'userKyc'));
    }

    public function RankingTrade(){
        $guest_user = DB::table('guest_users')->where('USER_EMAIL', Auth::user()->email)->get();
        $userKyc = DB::table('kycs')->where('USER_EMAIL', Auth::user()->email)->first();
        return view('avatar.simulator_trade.ranking_trade', compact('guest_user', 'userKyc'));
    }
}
