<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GameController extends Controller
{
    public function indexGame(){
        return view('profile.dev_profile');
    }
}
