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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'GameController@indexGame')->name('LEVELup');

// Route::view('/home', 'home') ->name('Home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/user_profile', 'UploadImageProfile@indexGuest_user')->name('homeProfile');
Route::get('/userUpdate_profile', 'UploadImageProfile@updateGuest_user')->name('EditProfile');
Route::post('/userUpdate_profile/edit', 'UploadImageProfile@saveProfileUser')->name('UserEditProfile');

Route::get('/dev_profile', 'UploadImageProfile@index')->name('devProfile');
Route::get('/devUpdate_profile', 'UploadImageProfile@update')->name('UpDate');
Route::post('/devUpdate_profile/edit', 'UploadImageProfile@saveProfileDev')->name('DevEditProfile');

Route::post('/dev_profile/GameImg', 'GameController@saveGameProfile')->name('GameImg');

Route::get('/spon_profile', 'UploadImageProfile@indexSpon')->name('sponProfile');
Route::get('/sponUpdate_profile', 'UploadImageProfile@updateSpon')->name('SponUpDate');
Route::post('/sponUpdate_profile/edit', 'UploadImageProfile@saveProfileSpon')->name('SponEditProfile');

Route::get('/change_password', function () {
    return view('change_password');
});

Route::get('/userKyc', 'KycController@indexUserKyc')->name('userKyc');
Route::get('/devKyc', 'KycController@indexDevKyc')->name('devKyc');
Route::get('/sponKyc', 'KycController@indexSponKyc')->name('sponKyc');

Route::post('/kyc/create', 'KycController@createKyc')->name('CreateKyc');

Route::view('/game_shelf', 'game_shelf') ->name('GAMESHELF');

Route::get('/edit_upload_game', 'UploadImageProfile@edit_game')->name('EditGame');