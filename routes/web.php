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

Route::get('/logout', function () {
	//for loging out !!
	Auth::logout();
	return redirect('/');
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


//Requests Routes
Route::get('/requests', 'RequestsController@Show');
Route::post('/requests', 'RequestsController@Show');

//To Direct User to New Request Page After Click !
Route::get('/new-request', 'RequestsController@NewRequest');
	
Route::post('/details-request', 'RequestsController@RequestDetails');

// To Store The data after posting it from the view !
Route::post('/store', array( 'as' => 'store', 'uses' => 'RequestsController@store'));
	
Route::post('/request-accept', 'RequestsController@RequestAccept');
Route::post('/request-reject', 'RequestsController@RequestReject');

// Transeaction the Requests transact
Route::post('/transact', 'RequestsController@Transact');



// website 
Route::get('/about', 'webController@about')->name('web.about');
Route::get('/donate', 'webController@donate')->name('web.donate');
Route::get('/events', 'webController@events')->name('web.events');
Route::get('/library', 'webController@library')->name('web.library');





Route::get('/web' , function () {
   return view('web.home');

});

Route::get('/employees', 'webController@employees')->name('cpac.employees.employees');
Route::get('/edit-employee', 'webController@editemployee')->name('cpac.employees.edit-employee');
Route::get('/new-employees', 'webController@newemployees')->name('cpac.employees.new-employees');
Route::get('/department', 'webController@department')->name('cpac.department.department');
Route::get('/new-department', 'webController@newdepartment')->name('cpac.department.new-department');
Route::get('/edit-department', 'webController@editdepartment')->name('cpac.department.edit-department');
Route::get('/books', 'webController@books')->name('cpac.books.books');
Route::get('/new-book', 'webController@newbook')->name('cpac.books.new-book');
Route::get('/edit-book', 'webController@editbook')->name('cpac.books.edit-book');
Route::get('/languge', 'webController@bookslanguge')->name('cpac.books.languge');
Route::get('/new-languge', 'webController@booksnewlanguge')->name('cpac.books.new-languge');
Route::get('/profile', 'webController@profile')->name('cpac.profile');
Route::get('/home1', 'webController@home1')->name('cpac.home1');
Route::get('/archives', 'webController@archives')->name('cpac.archive.archives');
Route::get('/new-archive', 'webController@newarchive')->name('cpac.archive.new-archive');
Route::get('/details-archive', 'webController@detailsarchive')->name('cpac.archive.details-archive');

