<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadImageProfile extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $req)
    {
        // print_r($req->file());
        //echo $req->file('user_img')->store('public/home/imgProfile');
        $req->file('user_img')->store('public/home/imgProfile');
    }
}
