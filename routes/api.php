<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group([
    'middleware' => 'api',
], function ($router) {
    Route::post('/login', 'APIs\Auth\LoginAPIsController@LoginAPIs');
    Route::get('/logout/{token}', 'APIs\Auth\LoginAPIsController@LogoutAPIs');

    Route::post('/trading', 'APIs\simulatorAPIs\simulatorAPIsController@tradeAPIs');
    // Route::get('/me', function () {
    //     if(auth()->user()){
    //         return response()->json([
    //             'id' => Auth::user()->id,
    //             'email' => Auth::user()->email
    //         ]);
    //     }else{
    //         return response()->json([ 'message' => 'error login', 'v' =>auth()->user()]);
    //     }
    // });
});