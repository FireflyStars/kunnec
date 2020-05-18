
<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/user', function (Request $request) {
    return $request->user();
});

Route::namespace('api')->group(function(){
	Route::get('/check','ktmController@check');
	Route::prefix('ktm')->group(function(){
		Route::post('/jobpost','ktmController@jobpost');
		Route::get('/opprtunity','ktmController@opprtunities');
		Route::delete('/delete/{id}','ktmController@delete');
	});	
	
	Route::prefix('catagories')->group(function(){
		Route::get('/','categoryController@category');
		Route::get('/{id}','categoryController@subcategory');
	});

});

