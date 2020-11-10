<?php

namespace App\Http\Controllers\simulatorTrade;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use DB;
use Auth;

use App\Simulator\simulator_trade;
use App\Simulator\ranking_trade;

class tradeController extends Controller
{
    public function SimulatorTrade(){
        $guest_user = DB::table('guest_users')->where('USER_EMAIL', Auth::user()->email)->get();
        $userKyc = DB::table('kycs')->where('USER_EMAIL', Auth::user()->email)->first();
        $shopping = DB::table('shopping_cart')->where([['USER_EMAIL', Auth::user()->email], ['shopping_cart_status', 'false']])->get();
        foreach($guest_user as $defaultAvatar){
            $avatar = json_decode($defaultAvatar->AVATAR);
        }
        $amount_trade = ranking_trade::where('user_email', Auth::user()->email)->first();
        $ranking = DB::table('ranking_trades')
                    ->join('guest_users', 'guest_users.USER_EMAIL', 'ranking_trades.user_email')
                    ->join('users', 'users.email', 'guest_users.USER_EMAIL')
                    ->orderBy('amount', 'desc')->limit(5)
                    ->get();
        if(count($ranking) == 0){
            return view('avatar.simulator_trade.simulator_trade', compact('guest_user', 'userKyc', 'amount_trade', 'shopping', 'avatar'));
        }
        // dd($ranking);
        return view('avatar.simulator_trade.simulator_trade', compact('guest_user', 'userKyc', 'amount_trade', 'ranking', 'shopping', 'avatar'));
    }

    // public function getDataTrade(){
    //     $client = new \GuzzleHttp\Client();
    //     $api_response = $client->get('https://dev-api.shrimpy.io/v1/exchanges/kucoin/ticker');
    //     $response = json_decode($api_response->getBody());
    //     return $response;
    // }

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
        $ranking = DB::table('ranking_trades')
                    ->join('guest_users', 'guest_users.USER_EMAIL', 'ranking_trades.user_email')
                    ->join('users', 'users.email', 'guest_users.USER_EMAIL')
                    ->orderBy('amount', 'desc')->limit(10)
                    ->get();
        if(count($ranking) == 0){
            return view('avatar.simulator_trade.ranking_trade', compact('guest_user', 'userKyc', 'shopping', 'avatar'));
        }else{
            $ranking100 = DB::table('ranking_trades')
                    ->join('guest_users', 'guest_users.USER_EMAIL', 'ranking_trades.user_email')
                    ->join('users', 'users.email', 'guest_users.USER_EMAIL')
                    ->orderBy('amount', 'desc')->offset(10)->limit(100)
                    ->get();
            if(count($ranking100) == 0){
                return view('avatar.simulator_trade.ranking_trade', compact('guest_user', 'userKyc', 'shopping', 'avatar', 'ranking'));
            }
        }
        return view('avatar.simulator_trade.ranking_trade', compact('guest_user', 'userKyc', 'shopping', 'avatar', 'ranking', 'ranking100'));
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
        $amount_trade = ranking_trade::where('user_email', Auth::user()->email)->first();
        $simulator = simulator_trade::limit(6)->get();
        $random = random_int(1, count($simulator));
        $dataSimulator = simulator_trade::where('id', $random)->first();
        if($amount_trade != null){
            if($request->input('status') != "false"){
                $amount_sum = $request->input('amount');
                ranking_trade::where('id', $amount_trade->id)->update(array('amount'=>$amount_sum));
            }
        }else{
            $trade = new ranking_trade();
            $trade->amount = $request->input('amount');
            $trade->user_id = Auth::user()->id;
            $trade->user_email = Auth::user()->email;
            $trade->save();
        }
        
        $amount = ranking_trade::where('user_email', Auth::user()->email)->first();
        // dd($amount);
        return response()->json([
            'symbol'=>$dataSimulator->symbol,
            'date'=>$dataSimulator->date,
            'open'=>$dataSimulator->open,
            'high'=>$dataSimulator->high,
            'low'=>$dataSimulator->low,
            'close'=>$dataSimulator->close,
            'p_chg_'=>number_format($dataSimulator->p_chg_, 2),
            'amount'=>$amount->amount
        ]);
    }
}
