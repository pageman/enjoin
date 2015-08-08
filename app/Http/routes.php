<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('home');
});


// Auth Routes
Route::group(['prefix' => 'auth'], function () {

	Route::group(['prefix' => 'login'], function () {

		Route::get('/', function () {
		    return view('auth.login');
		});

		//Social Login
		Route::get('/login/{provider?}',[
		    'uses' => 'AuthController@getSocialAuth',
		    'as'   => 'auth.getSocialAuth'
		]);
		Route::get('/login/callback/{provider?}',[
	    'uses' => 'AuthController@getSocialAuthCallback',
	    'as'   => 'auth.getSocialAuthCallback'
	]);

});

	Route::get('/register', function () {
	    return view('auth.register');
	});

});

// User Routes
Route::group(['prefix' => 'u'], function () {

	// Feed
	Route::get('/', function () {
	    return view('account.index');
	});
	// Profile
	Route::get('/{username}', function () {
	    return view('account.profile.index');
	});
});


// Event Routes
Route::group(['prefix' => 'e'], function () {

	Route::get('/{id}', function () {
	    return view('event.index');
	});

});

// Messages Routes
Route::group(['prefix' => 'e'], function () {
	Route::get('/', function () {
	    return view('messages.index');
	});
});



