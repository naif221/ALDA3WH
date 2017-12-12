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
Route::post('/requests', 'HomeController@index');


// Route::get('/store', 'HomeController@');

//To Direct User to New Request Page After Click !
Route::get('/newrequests', function () {
	return view('cpac.newrequests');
});

// To Store The data after posting it from the view !
Route::post('/store', array( 'as' => 'store', 'uses' => 'RequestsController@store'));


Route::get('/logout', function () {
	//for loging out !!
	Auth::logout();
	return view('index');
});


Route::get('/forms', function () {
		return view('forms');
	});


	// Add Author , it's on LibraryController@AddAuthor. !!
Route::post('/addauthor', array( 'as' => 'addauthor', 'uses' => 'LibraryController@AddAuthor'));
	
// Add Language to the Language Table on LibraryController@AddLanguage.
Route::post('/addlang', array( 'as' => 'addlang', 'uses' => 'LibraryController@AddLanguage'));

// Add Book To The Library , on LibraryController@AddBook.
Route::post('/addbook', array( 'as' => 'addbook', 'uses' => 'LibraryController@AddBook'));

// To Update Books
Route::post('/updatebook', array( 'as' => 'updatebook', 'uses' => 'LibraryController@UpdateBook'));

// To DecraseBookByOne .
Route::post('/decrasebook', array( 'as' => 'decrasebook', 'uses' => 'LibraryController@DecreaseBookByOne'));

// To IncrementBookByOne.
Route::post('/incrementbook', array( 'as' => 'incrementbook', 'uses' => 'LibraryController@IncrementBookByOne'));

// To Store Issued.
Route::post('/storeissue', array( 'as' => 'storeissue', 'uses' => 'IssuedController@StoreIssued'));
// website 
Route::get('/about', 'webController@about')->name('web.about');
Route::get('/donate', 'webController@donate')->name('web.donate');
Route::get('/events', 'webController@events')->name('web.events');
Route::get('/library', 'webController@library')->name('web.library');

Route::get('/web' , function () {
   return view('web.home');

});

Route::get('/new-request', 'webController@newsrequest')->name('cpac.new-request');
Route::get('/employees', 'webController@employees')->name('cpac.employees');
Route::get('/edit-employee', 'webController@editemployee')->name('cpac.edit-employee');
Route::get('/new-employees', 'webController@newemployees')->name('cpac.new-employees');
Route::get('/details-request', 'webController@detailsrequest')->name('cpac.details-request');
Route::get('/department', 'webController@department')->name('cpac.department');
Route::get('/new-department', 'webController@newdepartment')->name('cpac.new-department');
Route::get('/edit-department', 'webController@editdepartment')->name('cpac.edit-department');
Route::get('/books', 'webController@books')->name('cpac.books.books');
Route::get('/new-book', 'webController@newbook')->name('cpac.books.new-book');
Route::get('/edit-book', 'webController@editbook')->name('cpac.books.edit-book');
Route::get('/languge', 'webController@bookslanguge')->name('cpac.books.languge');
Route::get('/new-languge', 'webController@booksnewlanguge')->name('cpac.books.new-languge');

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
