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
Route::get('/userUpdate_profile', 'UploadImageProfile@updateGuest_user')->name('EditProfile');
Route::post('/userUpdate_profile/edit', 'UploadImageProfile@saveProfileUser')->name('UserEditProfile');

Route::get('/dev_profile', 'UploadImageProfile@index')->name('devProfile');
Route::get('/devUpdate_profile', 'UploadImageProfile@update')->name('UpDate');
Route::post('/devUpdate_profile/edit', 'UploadImageProfile@saveProfileDev')->name('DevEditProfile');

Route::get('/spon_profile', 'UploadImageProfile@indexSpon')->name('sponProfile');
Route::get('/sponUpdate_profile', 'UploadImageProfile@updateSpon')->name('SponUpDate');
Route::post('/sponUpdate_profile/edit', 'UploadImageProfile@saveProfileSpon')->name('SponEditProfile');

Route::get('/change_password', function () {
    return view('change_password');
});

// Route::get('/kyc', 'KycController@indexGuest_user')->name('KYC');
// Route::get('/kyc/{type}', 'KycController@index');
Route::get('/kyc', 'KycController@indexSpon');

Route::post('/kyc/create', 'KycController@createKyc')->name('CreateKyc');

// Route::get('/kyc', function () {
//     return view('kyc');
// });

Route::view('/game_shelf', 'game_shelf') ->name('GAMESHELF');

// Route::view('/profile', 'layout/profile') ->name('PROFILE');
