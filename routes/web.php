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

// Route::get('/section_game', function () {
//     return view('section_game');
// });

// Route::view('/login', 'login');
Auth::routes();

// Route::resource('register', 'MembersController');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/user_profile', function () {
    return view('user_profile');
});

Route::get('/nevbar', function () {
    return view('layout/nevbar');
});
