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

Route::get('login/facebook', 'Auth\LoginController@redirectToFacebook')->name('login-facebook');
Route::get('callback/facebook', 'Auth\LoginController@handleFacebookCallback');

Route::get('login/google', 'Auth\LoginController@redirectToGoogle')->name('login-google');
Route::get('callback/google', 'Auth\LoginController@handleGoogleCallback'); 

// Route::view('/reset', 'auth.passwords.reset');
// Route::view('/email', 'auth.passwords.email');
Route::view('/confirm', 'auth.passwords.confirm');

Route::post('/dev_profile/GameImg', 'GameController@saveGameProfile')->name('GameImg');

Route::get('/sponKyc', 'KycController@indexSponKyc')->name('sponKyc');

Route::get('/detail/{id}', 'GameController@gameDetail')->name('GameDetail');
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
Route::get('/advertisement', 'AdminController@Advertisement')->name('Advertisement');
Route::get('/package', 'AdminController@Package')->name('Package');
Route::post('/package/add', 'AdminController@addPackage')->name('addPackage');
Route::post('/package/advertising', 'AdminController@advertising')->name('Advertising');
Route::get('/product', 'AdminController@Product')->name('Product');
Route::post('/product/approve', 'AdminController@approveProduct')->name('ApproveProduct');
Route::get('/avatar_management', 'AdminController@AvatarManagement')->name('AvatarManagement');



Route::view('/admin_change_password', 'profile.password.adminlvp_change_password');

Route::get('/avatar', 'Avatar\avatarController@Avatar')->name('Avatar');
Route::post('/avatar/addAvatar', 'Avatar\avatarController@addAvatar')->name('setAvatar');

Route::get('/shop', 'Avatar\marketItemController@Shop')->name('Shop');
Route::post('/shop/add_ShoppingCart', 'Avatar\marketItemController@add_ShoppingCart')->name('addShoppingCart');

Route::get('/sale', 'Avatar\saleItemController@Sale')->name('Sale');
Route::get('/add_sale_item', 'Avatar\saleItemController@AddSaleItem')->name('AddSaleItem');
Route::post('/add_sale_item/saleItem', 'Avatar\saleItemController@add_saleItem')->name('Add_SaleItem');

Route::get('/shopping_cart', 'Avatar\marketItemController@ShoppingCart')->name('ShoppingCart');
Route::post('/shopping_cart/payment','Avatar\marketItemController@ShoppingCartPayment')->name('shoppingCartPayment');
Route::get('/payment', 'Avatar\marketItemController@Payment')->name('Payment');
Route::post('/payment/qrCode', 'Avatar\marketItemController@itemibanking')->name('Itemibanking');
Route::post('/payment/Transfer', 'Avatar\marketItemController@itemTransferPayment')->name('itemTransfer');

Route::post('/payment/VisaCredit', 'Topup\creditPaymentController@visaCredit')->name('VisaCredit');

Route::get('/payment_confirmation/{invoice}', 'Avatar\marketItemController@paymentConfirmation')->name('PaymentConfirmation');
Route::post('/payment_confirmation/cancal', 'Avatar\marketItemController@cancalibanking_item')->name('cancalItem');
Route::get('/payment_transfer/{invoice}', 'Avatar\marketItemController@paymentTransfer')->name('PaymentTransfer');
Route::get('/successful_payment/{invoice}', 'Avatar\marketItemController@successfulPayment')->name('SuccessfulPayment');

Route::post('/payment/VisaCredit/callback', 'Topup\creditPaymentController@visaCreditCallback')->name('CreditCallback');
// Route::get('/payment/VisaCredit/callback', 'Topup\creditPaymentController@visaCreditCallback')->name('CreditCallback');

//trading
Route::get('/simulator_trade', 'simulatorTrade\tradeController@SimulatorTrade')->name('SimulatorTrade');
Route::get('/my_trade', 'simulatorTrade\tradeController@MyTrade')->name('MyTrade');
Route::get('/my_trade_detail', 'simulatorTrade\tradeController@MyTradeDetail')->name('MyTradeDetail');
Route::get('/ranking_trade', 'simulatorTrade\tradeController@RankingTrade')->name('RankingTrade');
Route::get('/real_investors', 'simulatorTrade\tradeController@RealInvestors')->name('RealInvestors');

//sponsor
Route::get('/sponsor_profile', 'UploadImageProfile@indexSpon')->name('SponsorProfile');
Route::post('/sponsor_profile/edit', 'UploadImageProfile@saveProfileSpon')->name('SponEditProfile');

Route::get('/advt_package', 'Sponsor\packageController@AdvtPackage')->name('AdvtPackage');
Route::get('/ads_sponsor', 'Sponsor\packageController@AdsSpon')->name('AdsSpon');
Route::post('/ads_sponsor/adsSpon', 'Sponsor\packageController@addAdsSpon')->name('AddAdsSpon');
Route::get('/advt_management/{id}', 'Sponsor\packageController@AdvtManagement')->name('AdvtManagement');
Route::get('/advt_add_game/{id}/{idM}', 'Sponsor\game_sponController@AdvtAddGame')->name('AdvtAddGame');
Route::post('/advt_add_game/add', 'Sponsor\game_sponController@sponsorGame')->name('addGame');
Route::post('/detail/listgame', 'Sponsor\game_sponController@listGame')->name('ListGame');
// Route::post('/advt_add_game/addgame', 'Sponsor\game_sponController@addSponsorGame')->name('addSpongame');

Route::get('/product_support', 'Sponsor\productController@ProductSupport')->name('ProductSupport');
Route::post('/product_support/addproduct', 'Sponsor\productController@addProduct')->name('addProduct');
Route::get('/product_support_select', 'Sponsor\productController@ProductSupportSelect')->name('ProductSupportSelect');
Route::get('/sponlvp_shelf', 'Sponsor\productController@SponShelf')->name('SponShelf');

Route::get('/spon_shopping_cart', 'Sponsor\game_sponController@SponShoppingCart')->name('SponShoppingCart');
Route::post('/spon_shopping_cart/payment', 'Sponsor\game_sponController@SponShoppingCartPayment')->name('sponShoppingCartPayment');
Route::post('/spon_shopping_cart/delete', 'Sponsor\game_sponController@daleteSponShoppingCart')->name('daleteShoppingCart');

Route::get('/sponsor_payment', 'UploadImageProfile@SponsorPayment')->name('SponsorPayment');
Route::post('/sponsor_payment/qrCode', 'Sponsor\packageController@packageibanking')->name('packageibanking');

Route::get('/paymentPackage/{id}/{idT}', 'Sponsor\packageController@packagePay')->name('packagePay');
Route::post('/paymentPackage/sponsor_transfer', 'Sponsor\packageController@sponTransferPayment')->name('sponTransferPayment');
Route::get('/sponsor_transfer/{invoice}', 'Sponsor\packageController@sponsorTransfer')->name('SponsorTransfer');

Route::post('/paymentPackage/address', 'AddressController@addAddress')->name('AddAddress');
Route::post('/paymentPackage/Delete', 'AddressController@deleteAddress')->name('DeleteAddress');

Route::get('/sponsor_payment_ibanking_confirm/{invoice}', 'Sponsor\packageController@sponsoribanking')->name('Sponsoribanking');
Route::post('/sponsor_payment_ibanking_confirm/cancal', 'Sponsor\packageController@cancalibanking')->name('cancalIbanking');
Route::get('/sponsor_payment_confirm', 'UploadImageProfile@SponsorPaymentConfirm')->name('SponsorPaymentConfirm');

Route::get('/sponsor_successful_payment/{invoice}', 'Sponsor\packageController@SponsorSuccessfulPayment')->name('SponsorSuccessfulPayment');
Route::get('/sponsor_topup', 'UploadImageProfile@SponsorTopup')->name('SponsorTopup');
Route::get('/sponsor_change_password', 'UploadImageProfile@SponsorChangePassword')->name('SponsorChangePassword');