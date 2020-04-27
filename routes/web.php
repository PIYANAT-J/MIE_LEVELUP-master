<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/home', 'home') -> name('Home');

// Route::get('/', function () {
//     return view('home');
// });

// Route::view('/login', 'login');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/user_profile', function () {
    return view('user_profile');
});
