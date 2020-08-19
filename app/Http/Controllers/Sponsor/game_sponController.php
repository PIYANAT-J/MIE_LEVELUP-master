<?php

namespace App\Http\Controllers\Sponsor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use DB;
use Auth;

class game_sponController extends Controller
{
    public function AdvtAddGame(){
        $sponsor = DB::table('sponsors')->where('USER_EMAIL', Auth::user()->email)->get();
        $game = DB::table('games')->where('GAME_STATUS','อนุมัติ')->get();
        return view('profile.sponsor.advt_add_game', compact('sponsor', 'game'));
    }
}
