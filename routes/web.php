<?php

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

//Route untuk guest atau user yang tidak login
Route::get('/', 'GuestController@index');
Route::get('/appstoday', 'GuestController@apps')->name('apps');
Route::get('/hacktoday', 'GuestController@hack')->name('hack');
Route::get('/data-mining', 'GuestController@daming')->name('daming');
Route::get('/seminar', 'GuestController@seminar')->name('seminar');
Route::get('/workshop', 'GuestController@workshop')->name('workshop');
Route::get('/rulebook-appstoday', 'GuestController@downApps')->name('downApps');
Route::get('/rulebook-hacktoday', 'GuestController@downHack')->name('downHack');
Route::get('/rulebook-dsc', 'GuestController@downDSC')->name('downDSC');

//Route untuk user yang sudah login
Auth::routes(['verify' => true]);
Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
Route::get('/data-diri/{key}', 'HomeController@showDataDiri')->name('data_diri')->middleware('verified');
Route::put('/data-diri/{key}/{id}', 'HomeController@updateDataDiri')->middleware('verified');
Route::put('/data-team/{id}', 'HomeController@updateDataTeam')->middleware('verified');
Route::get('/pembayaran', 'HomeController@showPembayaran')->name('bayar')->middleware('verified');
Route::post('/pembayaran', 'HomeController@postPembayaran')->name('postBayar')->middleware('verified');
Route::get('/berkas', 'HomeController@showBerkas')->name('berkas')->middleware('verified');
Route::post('/berkas', 'HomeController@postBerkas')->name('postBerkas')->middleware('verified');
// Route::get('/user/verify/{token}', 'Auth\RegisterController@verifyUser');
//ADMIN ROUTER
// Route::prefix('/maribakuhantam')->group(function () {
// 	//Admin Homepage
// 	Route::get('/', 'AdminController@index')->name('adminHome');
// 	//Admin Login
// 	Route::get('/login', 'AdminController@showLoginForm')->name('adminLogin');
// 	Route::post('/loginPost', 'AdminController@loginPost')->name('adminLoginPost');
// 	//Admin Register
// 	Route::get('/register', 'AdminController@showRegisterForm')->name('adminRegister');
// 	Route::post('/registerPost', 'AdminController@registerPost')->name('adminRegisterPost');

// 	//Admin Logout
// 	Route::get('/logout', 'AdminController@logout')->name('adminLogout');

// 	// Route::middleware(['auth'])->group(function () {
// 		//Team
// 		Route::prefix('/team')->group(function () {
// 			Route::get('/{id}', 'Admin\TeamController@show');
// 			Route::put('/{id}', 'Admin\TeamController@update');
// 		});
// 	// });
// });