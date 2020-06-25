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
	// main routes ..
	Route::get('/main','homeController@main')->name('newlook.landing');
	Route::get('/home', 'homeController@home')->name('newlook.home'); 
	Route::get('/my-schedual','homeController@myschedual')->name('newlook.schedual');
	Route::get('/photoeditor','homeController@photoeditor')->name('newlook.photoeditor'); // photoeditor ..
	
	// social section..
	Route::namespace('social')->group(function(){
		Route::get('edit-profile','socialcontroller@editprofile')->name('social.edit-profile');
		Route::get('account-settings','socialcontroller@accountsettings')->name('social.account-settings');
		Route::get('account-invoice','socialcontroller@invoices')->name('social.account-invoice');
		Route::get('messages','socialcontroller@messages')->name('social.messages');
		Route::get('kunnecs','socialcontroller@kunnecs')->name('social.kunnecs');
		Route::get('notification','socialcontroller@notification')->name('social.notification');
		Route::get('mutual-kunnecs','socialcontroller@mutualk')->name('social.mutual-kunnecs');
		Route::get('archived-posts','socialcontroller@archive')->name('social.archived-posts');
		Route::get('reported-posts','socialcontroller@reportedposts')->name('social.reported-posts');
		Route::namespace('events')->group(function(){
			Route::resource('/event','eventscontroller');
			Route::prefix('event')->group(function(){
				Route::get('/list','eventscontroller@invites')->name('social.invites');
			});
		});
	});
	
	// kunnec to me ..
	Route::prefix('kunnectome')->namespace('tome')->group(function(){
       	Route::get('/add','tomeController@index')->name('newlook.tomeadd');
       	Route::get('/opportunities','tomeController@jobs')->name('newlook.tomejobs');   
	});
	
	// kunnec sell ..
	Route::namespace('sell')->group(function(){
		Route::resource('/sells','sellcontroller');
	});

});