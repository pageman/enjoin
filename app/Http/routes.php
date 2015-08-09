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

Route::get('/', ['uses' => 'HomeController@index']);
Route::get('/landing', ['uses' => 'HomeController@landing']);


// Auth Routes
Route::group([], function () {

	Route::group(['prefix' => 'login'], function () {

		Route::get('/', function () {
		    return view('auth.login');
		});

		//Social Login
		Route::get('/{provider?}',[
		    'uses' => 'Auth\AuthController@getSocialAuth',
		    'as'   => 'auth.getSocialAuth'
		]);
		//Social Login callback
		Route::get('/callback/{provider?}',[
	    'uses' => 'Auth\AuthController@getSocialAuthCallback',
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
	// Interest
	Route::get('/interest', ['uses' => 'User\InterestController@index' ]);
	// Interest
	Route::get('/events', function () {
	    return view('account.events.index');
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
Route::group(['prefix' => 'm'], function () {
	Route::get('/', function () {
	    return view('message.index');
	});
	Route::get('/{id}', function () {
	    return view('message.show');
	});
	Route::get('/create', function () {
	    return view('message.create');
	});
});

// Nearby Routes
Route::group(['prefix' => 'nearby'], function () {
	Route::get('/', function () {
	    return view('nearby.index');
	});
	Route::get('/{id}', function () {
	    return view('nearby.show');
	});
});

// API Routes
Route::group(['prefix' => 'api'], function () {
	Route::get('/interests', [
		'uses' => 'Api\InterestController@index'
	]);
});

Route::group(['prefix' => 'messages'], function () {
    Route::get('/', ['as' => 'messages', 'uses' => 'MessengerController@index']);
    Route::get('create', ['as' => 'messages.create', 'uses' => 'MessengerController@create']);
    Route::post('/', ['as' => 'messages.store', 'uses' => 'MessengerController@store']);
    Route::get('{id}', ['as' => 'messages.show', 'uses' => 'MessengerController@show']);
    Route::put('{id}', ['as' => 'messages.update', 'uses' => 'MessengerController@update']);
});


