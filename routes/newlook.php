<?php

/*
|--------------------------------------------------------------------------
| new look
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::prefix('newlook')->namespace('newlook')->group(function(){
	Route::get('/main','homeController@main')->name('newlook.landing');
	Route::get('/home', 'homeController@home')->name('newlook.home');
});