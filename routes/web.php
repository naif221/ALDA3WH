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

Route::get('/', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/requests', 'HomeController@index');


Route::get('/store', 'HomeController@');

Route::get('/store', function () {
	return view('cpac.newrequests');
});
Route::post('/store', array( 'as' => 'store', 'uses' => 'RequestsController@store'));


// Route::post('/store', array( 'as' => 'store', 'uses' => 'RequestsController@store'));

// route to show the login form
// Route::get('login', 'LoginController@showLogin');

// // // route to process the form
// Route::post('login', 'LoginController@doLogin');

// Route::get('login', array( 'as' => 'login', 'uses' => 'HomeController@showLogin'));

// Route::get('h', function () {
// 	return 'hello';
// 	return view('navbar');
// });
		
// Route::get('cpac', function () {
// 	return view('cpac.style.header');
// });
			
			
// Route::get('r', function () {
// 	return view('cpac.requests');
// });
				
				
// Route::get('n', function () {
// 	return view('cpac.newrequests');
// });


// Route::post('LoginVerify', 'LoginController@validateCredentials');
	
	
// Route::post('home', function () {
// 	return view('cpac.request');
// 	});


// Route::get('login', function () {
// 	return view('cpac.login');
// 	});
