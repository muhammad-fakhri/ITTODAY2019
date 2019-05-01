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
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
