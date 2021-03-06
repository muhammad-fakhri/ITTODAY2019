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
Route::get('/', function ()
{
  return view('coming_soon');
});

// Route::get('/', 'GuestController@index');
// Route::get('/appstoday', 'GuestController@apps')->name('apps');
// Route::get('/hacktoday', 'GuestController@hack')->name('hack');
// Route::get('/data-mining', 'GuestController@daming')->name('daming');
// Route::get('/seminar', 'GuestController@seminar')->name('seminar');
// Route::get('/workshop', 'GuestController@workshop')->name('workshop');
// Route::get('/about', 'GuestController@about')->name('about');
// Route::get('/rulebook-appstoday', 'GuestController@downApps')->name('downApps');
// Route::get('/rulebook-hacktoday', 'GuestController@downHack')->name('downHack');
// Route::get('/rulebook-dsc', 'GuestController@downDSC')->name('downDSC');

//Route untuk user yang sudah login
// Auth::routes(['verify' => true]);

// Kalo mau matiin fungsi register
// Auth::routes(['verify' => true, 'register'=>false]);

// Route::get('/dashboard', 'HomeController@index')->name('dash')->middleware('verified');
// Route::get('/data-diri/{key}', 'HomeController@showDataDiri')->name('data_diri')->middleware('verified');
// Route::put('/data-diri/{key}/{id}', 'HomeController@updateDataDiri')->middleware('verified');
// Route::put('/data-team/{id}', 'HomeController@updateDataTeam')->middleware('verified');
// Route::get('/pembayaran', 'HomeController@showPembayaran')->name('bayar')->middleware('verified');
// Route::post('/pembayaran', 'HomeController@postPembayaran')->name('postBayar')->middleware('verified');
// Route::get('/berkas', 'HomeController@showBerkas')->name('berkas')->middleware('verified');
// Route::post('/berkas', 'HomeController@postBerkas')->name('postBerkas')->middleware('verified');

// Route berbahaya (jangan dihidupkan tanpa sepengetahuan fakhri)
// Route::get('/wkwkinihalamanfakhriajayangbolehpake', 'GuestController@showHapusAkun')->middleware('verified');
// Route::get('/wkwkinihalamanfakhriajayangbolehpake/{id}', 'GuestController@hapusAkun')->name('hapus')->middleware('verified');
