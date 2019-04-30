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

 
Route::get('/register','RegisterController@create')->name('register');

Route::get('/','TeamController@start')->name('index');

Route::post('/daftar','TeamController@addTeam');
Route::post('/bayar','ProfileController@uploadPay');
Route::post('/ktm','ProfileController@uploadKTM');
Route::post('/letter','ProfileController@uploadLetter');

Route::get('/stp1','TeamController@showForm');

Route::get('/appstoday','TeamController@appsToday')->name('appstoday');
Route::get('/hacktoday','TeamController@hackToday')->name('hacktoday');
Route::get('/business','TeamController@businessIT')->name('business');
Route::get('/data-mining','TeamController@daming')->name('daming');
Route::get('/seminar','TeamController@seminarIT')->name('seminar');
Route::get('/workshop','TeamController@workshop')->name('workshop');
Route::get('/postevent','TeamController@postEvent')->name('postevent');

Route::get('/profile','ProfileController@teamProfile')->name('team.profile');
Route::get('/payment','ProfileController@payment')->name('payment');
Route::get('/editprofile','ProfileController@editProfile');
Route::post('/saveprofile','ProfileController@saveProfile');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



/***
*ADMIN ROUTE, GAUSAH DIGANTI JADI PREFIX, tp klo mau, monggo. 
***/
Route::prefix('antiribetclub')->group(function(){
	Route::get('/home','AdminController@main')->name('admin.home');
	Route::get('/','Admin\LoginController@showLoginForm')->name('admin.login');
	Route::post('/','Admin\LoginController@login');
	Route::get('/main','AdminController@main');
	Route::get('/detail/{id}','AdminController@detail');
	Route::get('/verifyktm/{id}','AdminController@verifyktm');
	Route::get('/verifyletter/{id}','AdminController@verifyletter');
	Route::get('/verifypayment/{id}','AdminController@verifypayment');
	Route::get('/unverifyktm/{id}','AdminController@unverifyktm');
	Route::get('/unverifyletter/{id}','AdminController@unverifyletter');
	Route::get('/unverifypayment/{id}','AdminController@unverifypayment');
	Route::get('/tolakktm/{id}','AdminController@tolakktm');
	Route::get('/tolakletter/{id}','AdminController@tolakletter');
	Route::get('/tolakpayment/{id}','AdminController@tolakpayment');
});
