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

Route::get('/', 'Home@index');
	
Route::get('h', function () {
	return view('navbar');
});
		
Route::get('cpac', function () {
	return view('cpac.style.header');
});
			
			
Route::get('r', function () {
	return view('cpac.requests');
});
				
				
Route::get('n', function () {
	return view('cpac.newrequests');
});