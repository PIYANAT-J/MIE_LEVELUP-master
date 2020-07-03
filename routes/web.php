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
Route::post('/Follow', 'FollowController@followGame')->name('Follow');

Auth::routes();
Route::view('/loginlvp', 'auth.login_lvp')->name('login-levelUp');
Route::view('/registerlvp', 'auth.register_lvp')->name('register-levelUp');

// Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/user_profile', 'UploadImageProfile@indexGuest_user')->name('homeProfile');
// Route::get('/userUpdate_profile', 'UploadImageProfile@updateGuest_user')->name('EditProfile');
// Route::post('/userUpdate_profile/edit', 'UploadImageProfile@saveProfileUser')->name('UserEditProfile');

// Route::get('/dev_profile', 'UploadImageProfile@index')->name('devProfile');
// Route::get('/devUpdate_profile', 'UploadImageProfile@update')->name('UpDate');
// Route::post('/devUpdate_profile/edit', 'UploadImageProfile@saveProfileDev')->name('DevEditProfile');

Route::post('/dev_profile/GameImg', 'GameController@saveGameProfile')->name('GameImg');

Route::get('/spon_profile', 'UploadImageProfile@indexSpon')->name('sponProfile');
Route::get('/sponUpdate_profile', 'UploadImageProfile@updateSpon')->name('SponUpDate');
Route::post('/sponUpdate_profile/edit', 'UploadImageProfile@saveProfileSpon')->name('SponEditProfile');

Route::get('/change_password', function () {
    return view('change_password');
});

// Route::get('/userKyc', 'KycController@indexUserKyc')->name('userKyc');
// Route::get('/devKyc', 'KycController@indexDevKyc')->name('devKyc');
Route::get('/sponKyc', 'KycController@indexSponKyc')->name('sponKyc');

// Route::post('/kyc/create', 'KycController@createKyc')->name('CreateKyc');

Route::get('/game_shelf', 'DownloadController@indexGame')->name('GAMESHELF');
// Route::post('/game_shelf/download', 'DownloadController@downloadGame')->name('downloadGame');

// Route::get('/edit_upload_game', 'UploadImageProfile@edit_game')->name('EditGame');

// Route::get('/user_mamagement', 'AdminController@indexAdmin')->name('Admin')->middleware('Admin');
// Route::post('/user_mamagement/Kyc', 'AdminController@approveKyc')->name('AppKyc');
// Route::post('/user_mamagement/Game', 'AdminController@approveGame')->name('AppGame');
// Route::post('/user_mamagement/AddAdmin', 'AdminController@createAdmin')->name('AddAdmin');

Route::get('/detail-{id}', 'GameController@gameDetail')->name('GameDetail');
Route::post('/detail/download', 'DownloadController@downloadGame')->name('downloadGame');
Route::post('/detail/comment', 'CommentController@createComment')->name('Comment');

Route::get('/category', 'GameController@categoryGame')->name('gameCategory');

Route::get('/followMe', 'FollowController@FollowMe')->name('FollowMe');

// users
Route::get('/user_lvp', 'UploadImageProfile@Guest_user')->name('UserProfile');
Route::post('/user_lvp/edit', 'UploadImageProfile@saveProfileUser')->name('EditProfile');

Route::get('/user_kyc', 'KycController@indexUserKyc')->name('UserKyc');
Route::post('/kyc/create', 'KycController@createKyc')->name('CreateKyc');

Route::get('/user_shelf', 'UploadImageProfile@user_shelf')->name('UserShelf');

Route::view('/user_history', 'profile.point.userlvp_history')->name('UserHistory');
Route::view('/user_rank', 'profile.userlvp_rank')->name('UserRank');

Route::get('/user_topup', 'qrPaymentController@indexPayment')->name('UserTopup');
Route::post('/user_topup/qrCode', 'qrPaymentController@mobilebanking')->name('QrPayment');
Route::post('/user_topup/transfer', 'TransferController@transferPayment')->name('transferPayment');
// Route::get('/user_topup/qrCode/{invoice}', 'qrPaymentController@qrcode')->name('qrcode');


Route::view('/user_change_password', 'profile.password.userlvp_change_password');

// developer
Route::get('/develper_profile', 'UploadImageProfile@Developer')->name('DevProfile');
Route::post('/develper_profile/edit', 'UploadImageProfile@saveProfileDev')->name('DevEditProfile');

Route::get('/develper_kyc', 'KycController@indexDevKyc')->name('DevKyc');

Route::get('/develper_shelf', 'UploadImageProfile@developer_shelf')->name('DevShelf');
Route::post('/develper_shelf/Update', 'GameController@saveGameProfile')->name('DevShelfUpdate');

Route::view('/develper_history', 'profile.point.devlvp_history')->name('DevHistory');

Route::get('/develper_upload_game', 'UploadImageProfile@viewUpload')->name('DevUpload');
Route::post('/develper_upload_game/upload', 'GameController@saveGameProfile')->name('DevUploadGame');

Route::get('/develper_withdraw', 'WithdrawController@withdraw')->name('DevWithdraw');
Route::post('/develper_withdraw/addWithdraw', 'WithdrawController@stor')->name('AddWithdraw');
Route::post('/develper_withdraw/addBank', 'mybankController@addBank')->name('AddBank');


Route::view('/develper_change_password', 'profile.password.devlvp_change_password');

//admin
Route::get('/admin_management', 'AdminController@addAdmin')->name('AdminManagement')->middleware('Admin');
Route::post('/admin_management/AddAdmin', 'AdminController@createAdmin')->name('AddAdmin');

//admin kyc approve 
Route::get('/user_management', 'AdminController@kycUsers')->name('UserManagement');
Route::get('/develop_management', 'AdminController@kycDev')->name('DevelopManagement');
Route::get('/sponsor_management', 'AdminController@kycSpon')->name('SponsorManagement');
Route::post('/user_management/approve', 'AdminController@approveKyc')->name('AppKyc');

//admin game approve
Route::view('/game_management', 'admin_lvp.admin_game.game_management')->name('GameManagement');
Route::view('/rate_management', 'admin_lvp.admin_game.rate_management')->name('RateManagement');

Route::view('/topup_management', 'admin_lvp.admin_topup.topup_management')->name('TopupManagement');
Route::view('/withdraw_management', 'admin_lvp.admin_topup.withdraw_management')->name('WithdrawManagement');

Route::view('/product', 'product')->name('Product');

Route::view('/admin_change_password', 'profile.password.adminlvp_change_password');