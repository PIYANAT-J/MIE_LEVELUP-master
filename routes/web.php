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

// Route::view('/home', 'home') ->name('Home');

// Route::get('/section_game', function () {
//     return view('section_game');
// });

// Route::view('/login', 'login');
Auth::routes();

// Route::resource('register', 'MembersController');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/user_profile', 'UploadImageProfile@indexGuest_user')->name('homeProfile');
Route::get('/update_profile/user', 'UploadImageProfile@updateGuest_user')->name('EditProfile');
Route::post('/update_profile/user/edit', 'UploadImageProfile@saveProfileUser')->name('UserEditProfile');

Route::get('/dev_profile', 'UploadImageProfile@index')->name('devProfile');
Route::get('/update_profile/dev', 'UploadImageProfile@update')->name('UpDate');
Route::post('/update_profile/dev/edit', 'UploadImageProfile@saveProfileDev')->name('DevEditProfile');

Route::get('/spon_profile', 'UploadImageProfile@indexSpon')->name('sponProfile');
Route::get('/update_profile/spon', 'UploadImageProfile@updateSpon')->name('SponUpDate');
Route::post('/update_profile/spon/edit', 'UploadImageProfile@saveProfileSpon')->name('SponEditProfile');

// Route::get('/dev_profile', function () {
//     return view('dev_profile');
// });
// Route::get('/update_profile', function () {
//     return view('update_profile');
// });
Route::get('/change_password', function () {
    return view('change_password');
});

Route::view('/game_shelf', 'game_shelf') ->name('GAMESHELF');

// Route::view('/profile', 'layout/profile') ->name('PROFILE');
