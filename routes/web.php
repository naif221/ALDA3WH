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

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/logout', function () {
	//for loging out !!
	Auth::logout();
	return redirect('/');
});


// // Add Author , it's on LibraryController@AddAuthor. !!
// Route::post('/addauthor', array( 'as' => 'addauthor', 'uses' => 'LibraryController@AddAuthor'));
	
// // Add Language to the Language Table on LibraryController@AddLanguage.
// Route::post('/addlang', array( 'as' => 'addlang', 'uses' => 'LibraryController@AddLanguage'));

// // Add Book To The Library , on LibraryController@AddBook.
// Route::post('/addbook', array( 'as' => 'addbook', 'uses' => 'LibraryController@AddBook'));

// // To Update Books
// Route::post('/updatebook', array( 'as' => 'updatebook', 'uses' => 'LibraryController@UpdateBook'));

// To DecraseBookByOne .
// Route::post('/decrasebook', array( 'as' => 'decrasebook', 'uses' => 'LibraryController@DecreaseBookByOne'));

// // To IncrementBookByOne.
// Route::post('/incrementbook', array( 'as' => 'incrementbook', 'uses' => 'LibraryController@IncrementBookByOne'));


// To Store Issued.
// Route::post('/storeissue', array( 'as' => 'storeissue', 'uses' => 'IssuedController@StoreIssued'));

//Requests Routes
Route::get('/requests', 'RequestsController@Show');
Route::get('/oldrequests', 'RequestsController@ShowOldRequests');

//To Direct User to New Request Page After Click !
Route::get('/new-request', 'RequestsController@NewRequest');
	
Route::post('/details-request', 'RequestsController@RequestDetails');

// To Store The data after posting it from the view !
Route::post('/store', array( 'as' => 'store', 'uses' => 'RequestsController@store'));
	
Route::post('/request-accept', 'RequestsController@RequestAccept');
Route::post('/request-reject', 'RequestsController@RequestReject');

//
Route::post('/delete-request', 'RequestsController@DeleteRequest');


// Transeaction the Requests transact
Route::post('/transact', 'RequestsController@Transact');


// Emplyees Section !

Route::get('/employees', 'HomeController@ShowEmployees');
Route::get('/new-employees', 'HomeController@GetDepartments');
Route::post('/new-employees', 'HomeController@AddEmployee');

Route::get('/edit-employee', 'HomeController@GetEditEmployee');
Route::post('/edit-employee', array( 'as' => 'edit-employee', 'uses' => 'HomeController@EditEmployee'));


// Department Section
Route::get('/department', 'HomeController@GetDepartmentsForD');
Route::get('/edit-department', 'HomeController@GetEditDepartment');
Route::post('/edit-department', 'HomeController@EditDepartment');
Route::get('/new-department', 'HomeController@GetNewDepartmentPage');
Route::post('/new-department', 'HomeController@AddDepartment');



// Archive Section
Route::get('/archives', 'IssuedController@ShowArchive');
Route::get('/new-archive', 'IssuedController@StoreIssued');
Route::post('/new-archive', 'IssuedController@StoreIssued');

Route::get('/details-archive', 'IssuedController@Details');

Route::get('/delete-archive', 'IssuedController@DeleteArchive');
Route::get('/download-archive', 'IssuedController@DownloadFile');


// Library Section is Here !
Route::post('/new-languge', 'LibraryController@AddLanguage');
Route::get('/new-languge', 'LibraryController@AddLanguage');
Route::get('/languages', 'LibraryController@ShowLanguages');

Route::get('/books', 'LibraryController@ShowBooks');

Route::get('/new-book', 'LibraryController@AddBook');
Route::post('/new-book', 'LibraryController@AddBook');

Route::post('/edit-in-stock', 'LibraryController@EditInStock');


Route::get('/new-author', 'LibraryController@AddAuthor');
Route::post('/new-author', 'LibraryController@AddAuthor');

Route::get('/author', 'LibraryController@ShowAuthors');

Route::get('/edit-book', 'LibraryController@ShowAuthors');

Route::get('/edit-book', 'LibraryController@UpdateBook');
Route::post('/edit-book', 'LibraryController@UpdateBook');



// Public Site library

Route::get('/library', 'webController@ShowBooks');



// website 
Route::get('/about', 'webController@about')->name('web.about');
Route::get('/donate', 'webController@donate')->name('web.donate');
Route::get('/events', 'webController@events')->name('web.events');
Route::get('/news', 'newsController@index');
Route::get('/news/{id}', 'newsController@show');
Route::get('/web','webController@index');
/*
Route::get('/' , function () {
   return view('web.home');

});
*/

Route::get('/profile', 'HomeController@profile');



Route::get('/media-news' , function () {
	return view('cpac.media.media-news');
 
 });
 
Route::get('/media' , function () {
	return view('cpac.media.media');
 
 });

 Route::get('/edit-media' , function () {
	return view('cpac.media.edit-media');
 
 });
 
Route::get('/new-news' , function () {
	return view('cpac.media.new-news');
 
 });
 

 Route::get('/edit-news' , function () {
	return view('cpac.media.edit-news');
 
 });
 
