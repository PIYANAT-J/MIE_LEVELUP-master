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

Auth::routes(['verify' => true]);
Route::view('/loginlvp', 'auth.login_lvp')->name('login-levelUp');
Route::view('/registerlvp', 'auth.register_lvp')->name('register-levelUp');

// Route::view('/reset', 'auth.passwords.reset');
// Route::view('/email', 'auth.passwords.email');
Route::view('/confirm', 'auth.passwords.confirm');

Route::post('/dev_profile/GameImg', 'GameController@saveGameProfile')->name('GameImg');

// Route::get('/spon_profile', 'UploadImageProfile@indexSpon')->name('sponProfile');
// Route::get('/sponUpdate_profile', 'UploadImageProfile@updateSpon')->name('SponUpDate');

// Route::get('/change_password', function () {
//     return view('change_password');
// });

// Route::get('/userKyc', 'KycController@indexUserKyc')->name('userKyc');
// Route::get('/devKyc', 'KycController@indexDevKyc')->name('devKyc');
Route::get('/sponKyc', 'KycController@indexSponKyc')->name('sponKyc');

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

// Route::view('/user_history', 'profile.point.userlvp_history')->name('UserHistory');
// Route::view('/user_rank', 'profile.userlvp_rank')->name('UserRank');
Route::get('/user_history', 'TransferController@userPoint')->name('UserHistory');
Route::get('/user_rank', 'TransferController@userRank')->name('UserRank');

Route::get('/user_topup', 'Topup\qrPaymentController@indexPayment')->name('UserTopup');
Route::post('/user_topup/qrCode', 'Topup\qrPaymentController@mobilebanking')->name('QrPayment');
Route::post('/user_topup/qrCode/callback', 'Topup\Call_back\Callback_scbController@callback')->name('callbackQr');
Route::post('/user_topup/transfer', 'TransferController@transferPayment')->name('transferPayment');

Route::get('/user_change_password', 'Auth\ResetPasswordController@userPass')->name('userPsss');
Route::post('/user_change_password/Reset', 'Auth\ResetPasswordController@passwordUserReset')->name('passwordUserReset');

// developer
Route::get('/develper_profile', 'UploadImageProfile@Developer')->name('DevProfile');
Route::post('/develper_profile/edit', 'UploadImageProfile@saveProfileDev')->name('DevEditProfile');

Route::get('/develper_kyc', 'KycController@indexDevKyc')->name('DevKyc');

Route::get('/develper_shelf', 'UploadImageProfile@developer_shelf')->name('DevShelf');
Route::post('/develper_shelf/Update', 'GameController@saveGameProfile')->name('DevShelfUpdate');

Route::get('/develper_history', 'TransferController@devPoint')->name('DevHistory');

Route::get('/develper_upload_game', 'UploadImageProfile@viewUpload')->name('DevUpload');
Route::post('/develper_upload_game/upload', 'GameController@saveGameProfile')->name('DevUploadGame');

Route::get('/develper_withdraw', 'WithdrawController@withdraw')->name('DevWithdraw');
Route::post('/develper_withdraw/addWithdraw', 'WithdrawController@stor')->name('AddWithdraw');
Route::post('/develper_withdraw/addBank', 'mybankController@addBank')->name('AddBank');


Route::get('/develper_change_password', 'Auth\ResetPasswordController@devPass')->name('devPass');

//admin
Route::get('/admin_management', 'AdminController@addAdmin')->name('AdminManagement')->middleware('Admin');
Route::post('/admin_management/AddAdmin', 'AdminController@createAdmin')->name('AddAdmin');

//admin kyc approve 
Route::get('/user_management', 'AdminController@kycUsers')->name('UserManagement');
Route::get('/develop_management', 'AdminController@kycDev')->name('DevelopManagement');
Route::get('/sponsor_management', 'AdminController@kycSpon')->name('SponsorManagement');
Route::post('/user_management/approve', 'AdminController@approveKyc')->name('AppKyc');

//admin game approve
Route::get('/game_management', 'AdminController@gameDev')->name('GameManagement');
Route::post('/game_management/approve', 'AdminController@approveGame')->name('ApproveGame');
Route::view('/rate_management', 'admin_lvp.admin_game.rate_management')->name('RateManagement');

Route::get('/topup_management', 'AdminController@transfer')->name('TopupManagement');
Route::post('/topup_management/Transfer', 'AdminController@approveTransfer')->name('ApproveTransfer');

Route::get('/withdraw_management', 'AdminController@withDraw')->name('WithdrawManagement');
Route::post('/withdraw_management/approve', 'AdminController@approveWithdraw')->name('AppWithDraw');

Route::view('/product', 'product')->name('Product');

Route::view('/admin_change_password', 'profile.password.adminlvp_change_password');

Route::get('/avatar', 'UploadImageProfile@Avatar')->name('Avatar');

Route::get('/shop', 'UploadImageProfile@Shop')->name('Shop');
Route::get('/sale', 'UploadImageProfile@Sale')->name('Sale');
Route::get('/add_sale_item', 'UploadImageProfile@AddSaleItem')->name('AddSaleItem');
Route::get('/shopping_cart', 'UploadImageProfile@ShoppingCart')->name('ShoppingCart');
Route::get('/payment', 'UploadImageProfile@Payment')->name('Payment');
Route::get('/payment_confirmation', 'UploadImageProfile@PaymentConfirmation')->name('PaymentConfirmation');
Route::get('/successful_payment', 'UploadImageProfile@SuccessfulPayment')->name('SuccessfulPayment');

//trading
Route::get('/simulator_trade', 'simulatorTrade\tradeController@SimulatorTrade')->name('SimulatorTrade');
Route::get('/my_trade', 'simulatorTrade\tradeController@MyTrade')->name('MyTrade');
Route::get('/my_trade_detail', 'simulatorTrade\tradeController@MyTradeDetail')->name('MyTradeDetail');
Route::get('/ranking_trade', 'simulatorTrade\tradeController@RankingTrade')->name('RankingTrade');
Route::get('/real_investors', 'simulatorTrade\tradeController@RealInvestors')->name('RealInvestors');

//sponsor
Route::get('/sponsor_profile', 'UploadImageProfile@indexSpon')->name('SponsorProfile');
Route::post('/sponsor_profile/edit', 'UploadImageProfile@saveProfileSpon')->name('SponEditProfile');
Route::get('/advt_package', 'UploadImageProfile@AdvtPackage')->name('AdvtPackage');
Route::get('/advt_management', 'UploadImageProfile@AdvtManagement')->name('AdvtManagement');
Route::get('/advt_add_game', 'UploadImageProfile@AdvtAddGame')->name('AdvtAddGame');
Route::get('/product_support', 'UploadImageProfile@ProductSupport')->name('ProductSupport');
Route::get('/product_support_select', 'UploadImageProfile@ProductSupportSelect')->name('ProductSupportSelect');
Route::get('/sponlvp_shelf', 'UploadImageProfile@SponShelf')->name('SponShelf');
Route::get('/spon_shopping_cart', 'UploadImageProfile@SponShoppingCart')->name('SponShoppingCart');
Route::get('/sponsor_payment', 'UploadImageProfile@SponsorPayment')->name('SponsorPayment');