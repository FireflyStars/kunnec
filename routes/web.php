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

Route::get('/', function () {
    return view('welcome22');
});

Route::get('/test',function(){
	return view('welcome');
});

Auth::routes();

/* --------------------------------------------------------------------------- */
 //Route for verification ..
Route::get('/user/activation/{token}', 'Auth\RegisterController@userActivation'); 
/* --------------------------------------------------------------------------- */

// Kunnec Sell Routes ..
Route::prefix('shop')->group(function(){
	
	Route::namespace('sell')->group(function(){
		Route::get('/','sellcontroller@sell')->name('sell'); // shop ..
	});
	
	Route::prefix('add')->group(function(){
		Route::get('/{id}','HomeController@product')->name('add'); // product ..
		Route::namespace('kunnecsell')->group(function(){
			Route::get('/category/{id}','filltersController@category')->name('category');
		});
	});

	Route::namespace('kunnecsell')->group(function(){
		Route::get('/filters','filltersController@fillters')->name('filter.sell');
	});
});

// routes for  guests ..	
Route::namespace('guests')->group(function(){
	Route::get('/kunnec-to-you','HomeController@gettoyou'); //  kunnec to you ..
	
	Route::prefix('kunnec-to-me')->group(function(){
		Route::get('/','HomeController@gettome'); // kunnec to me ..
		Route::get('/{id}','homeController@gettomesingle')->name('tome.single');
	});
	
	Route::get('/kunnec-record','homeController@getrecord'); // kunnec record ..
	Route::get('/contact','homeController@getcontact'); // contact page route ..
	Route::get('/plans','homeController@getplans'); // plans ..
	Route::get('/about','homeController@getabout'); // about ..
	Route::get('/pricing','homeController@getpricing'); // pricing ..
});

// for kunnec to you
Route::prefix('user')->namespace('profile')->group(function(){
	Route::get('/{id}','profileController@profile')->name('user.profile'); // ptofile ..
});

Route::prefix('kunnec-to-you')->namespace('toyou')->group(function(){
	Route::get('/user/{id}','sprofileController@profile')->name('toyou.profile'); // ptofile ..
	Route::any('/kty','toyouController@index')->name('kunnec.toyou'); // kunnec to you ..
	Route::get('/post/','toyouController@postservice')->name('post.service');
	Route::any('/services','toyouController@services')->name('toyou.services');
	Route::any('/my/services','toyouController@myservices')->name('my.services');
});

/* ------------------------------------------------------------------- */
 // Fillters  functions                                                  /
/* ------------------------------------------------------------------- */
Route::get('/state/{state}','searchController@state'); // searching state ..
Route::get('/city/{city}','searchController@city'); // searching city ....
Route::get('/search/{search}','searchController@search'); // for search bar ..	

/* --------------------------------------------------------------------*/
	// End Fillters
/* ----------------------------------------------------------------- */
Route::middleware('auth')->group(function(){
		/*--------------------------------------------------------------------*/
		/* Member pages                                           */                                              
		/* ---------------------------------------------------------------- */
		Route::get('/home','memberhomeController@home')->name('home'); // home after login ..
		Route::get('/category/{id}','searchController@category'); // for search bar ..
		Route::get('/post','memberhomeController@post'); // post ..
		Route::get('/browse','memberhomeController@browse'); // browser ..
		Route::get('/credit','memberhomeController@credit'); // credit ..
		Route::get('/payout','memberhomeController@payout'); //payout ..
		//Route::get('/message/{id}','memberhomeController@message'); // message ..
		//Route::get('/photos','memberhomeController@photos'); //photos
		Route::get('/kunnecs','memberhomeController@kunnecs'); // kunnecs ..
		Route::get('/setup','memberhomeController@setup'); // kunnec setup ..
		Route::get('/settings','memberhomeController@settings');	// settings ...
		Route::resource('/profile','ProfileController'); // profile ..
		//Route::get('profile/{id}','memberhomeController@userprofile'); // checking friend profile ..
		Route::resource('/post','post\postController'); // post ..
		Route::resource('/albums','AlbumController'); // album ..
		Route::resource('/profileimage','ProfilephotoController'); // getting profile image functionality ..
		Route::any('/timeline/photos','timelineController@photos'); // time photos generator ..
		Route::resource('/images/{id}','ImageController', ['parameters'=> ['{id}' => 'album_id']]); // images labum generator..
		Route::resource('/upload', 'UploadController');
		Route::resource('/friends','FriendsController'); // friends ... 
		Route::any('/request/{id}','friendship\friendshipController@send'); // friend request proccess ..
		Route::any('/cancle/request/{id}','friendship\friendshipController@cancle'); // cancle ..
		Route::any('/accept/{id}','friendship\friendshipController@accept'); // request accepter ..
		Route::get('/frnd/status/block/{id}','friendship\friendshipController@block'); // cancle
		Route::get('/frnd/status/unfriend/{id}','friendship\friendshipController@unfriend');
		Route::resource('/education','EducationController'); // education ..
		Route::resource('/information','InformationController'); // infromation of profile ..
		Route::resource('/socialmedia','SocialmediaController'); // social media ..
		Route::resource('/privacysettings','settingsController'); // privacy settings ..
		Route::get('/profile/unblock/{id}','settingsController@unblock'); //unblock ..
		
		//Route::get('/messages/{id}','ChatController@index')->name('message'); // chat ..
		//Route::get('/message','memberhomeController@message'); // user chat ..
		
		Route::namespace('tome')->prefix('tome')->group(function(){
			Route::any('/','tomeController@index')->name('kunnec.tome'); // get--ting on kunnec too me paid interface
			Route::any('/jobs','tomeController@jobs')->name('kunnec.job');
			Route::post('/job/{id}','tomeController@postjob')->name('post.job');
			Route::get('/job/delete','tomeController@deletejob')->name('job.delete');
			Route::get('/show/{id}','tomeController@show')->name('job.show'); // job ..
		});
		/* --------------------------------------------------------------------   */
		Route::namespace('kunnecsell')->group(function(){
			Route::resource('/sell','kunnecsellsController'); // kunnec sell ..

		});
	    /* --------------------------------------------------------------------- */
	    Route::namespace('toyou')->group(function(){
	    	Route::prefix('user')->group(function(){
	    		Route::get('/{token}','sprofileController@profile'); // ptofile ..
	    		Route::post('/des','sprofileController@des')->name('sprofile.des'); // for description ..
	    	});
	   		Route::any('/kty','toyouController@index'); // kunnec to you ..
	    });

	    Route::get('/messages','chat\chatController@chat')->name('message'); // message ..
	    Route::get('/send','chat\chatController@send');
});

/* -------------------------------------- */
//  Admin Side Login Routes...  //
/* -------------------------------------------- */
Route::prefix('admin')->group(function () {
	Route::get('login', ['as' => 'admin.login', 'uses' => 'adminAuth\LoginController@showLoginForm']);
	Route::post('login', 'adminAuth\LoginController@login')->name('admin.login');
	// Login Routes...
    Route::get('login', ['as' => 'admin.login', 'uses' => 'adminAuth\LoginController@showLoginForm']);
    Route::post('login', ['as' => 'login.post', 'uses' => 'adminAuth\LoginController@login']);
    Route::post('logout', ['as' => 'admin.logout', 'uses' => 'adminAuth\LoginController@logout']);
});

/* --------------------- */
// Admin routes 
/* -------------------- */
Route::namespace('admin')->prefix('admin')->middleware('admin')->group(function () {
    // Controllers Within The "App\Http\Controllers\Admin" Namespace ..
   Route::any('/dashboard','dashboardController@index'); // index ... 
   Route::resource('/categories','categoreiesController');
   Route::post('/subcategory/{id}','categoreiesController@subcategory')->name('subcat.store');
   Route::any('/subcat/{id}','categoreiesController@delsub')->name('subcat.delete'); // delete ..
	// users ..
	Route::group(['prefix' => 'users'], function (){
		Route::any('/','usersController@users'); //users ..
		Route::any('/deactivate','usersController@deactivate'); //users ..
		Route::any('/flags','usersController@flag'); //flag ..
		Route::any('/active/{id}','usersController@active'); // active ..
	});
	// user ..
	Route::group(['prefix'=>'user'],function(){
	 	Route::any('/{id}','usersController@user'); // for disable ..
		Route::any('/deactivat/{id}','usersController@disable'); // for disable ..
		Route::any('/active/{id}','usersController@active'); // active ..
	});
	// alerts ..
	Route::group(['prefix'=> 'alert'],function(){

		Route::any('/forward','alertController@forward'); // forward ..
		Route::any('/receive','alertController@receive'); // receive ..
		Route::any('flag','alertController@flag');//flag ..
	});	
	// credit ..
	Route::group(['prefix' => 'credit'],function(){
		Route::any('/','creditController@credit'); // credit ..
	});
	// settings .. 
	Route::group(['prefix' => 'settings'], function(){
		Route::get('/add/user','adduserController@index');
		Route::get('/register/user','adduserController@makeadmin');
		Route::any('/admin/list','adduserController@admins');
		Route::get('/admin/delete/{admin}','adduserController@deleteadmin');
	});
});
/* ------------------- */
 // End Admin Routes 
/* -------------------*/


