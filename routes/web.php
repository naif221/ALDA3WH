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
Route::get('/incrementbook/{id}', 'LibraryController@IncrementBookByOne');
// To IncrementBookByOne.
Route::get('/decrasebook/{id}', 'LibraryController@DecreaseBookByOne');


// To Store Issued.
// Route::post('/storeissue', array( 'as' => 'storeissue', 'uses' => 'IssuedController@StoreIssued'));

//Requests Routes
Route::get('/requests', 'RequestsController@Show');

//To Direct User to New Request Page After Click !
Route::get('/new-request', 'RequestsController@NewRequest');
	
Route::post('/details-request', 'RequestsController@RequestDetails');

// To Store The data after posting it from the view !
Route::post('/store', array( 'as' => 'store', 'uses' => 'RequestsController@store'));
	
Route::post('/request-accept', 'RequestsController@RequestAccept');
Route::post('/request-reject', 'RequestsController@RequestReject');
Route::post('/request-accept-w', 'RequestsController@RequestAcceptWithNoti');

//
Route::post('/delete-request', 'RequestsController@DeleteRequest');


// Transeaction the Requests transact
Route::post('/transact', 'RequestsController@Transact');
Route::post('/Add-Comment', 'RequestsController@AddComment');


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

Route::get('/delete-department/{id}', 'HomeController@DeleteDepartment');



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




// Internal Section News
Route::get('/media-news', 'NewsController@ShowNews');
Route::get('/new-news', 'NewsController@AddNews');
Route::post('/new-news', 'NewsController@AddNews');
Route::get('/delete-news', 'NewsController@DeleteNews');
Route::get('/banner', 'NewsController@banner');
Route::post('/StoreBanner', 'NewsController@banner');
Route::get('/muslims', 'NewsController@muslims');
Route::get('/edit-news', 'NewsController@EditPost');
Route::post('/edit-news', 'NewsController@EditPost');
Route::post('/store-muslims-count', 'NewsController@muslims');

Route::get('/decrase-count', 'NewsController@Decrase');
Route::get('/increase-count', 'NewsController@Incrase');

//stroe-img-event
Route::post('/stroe-img-event', 'NewsController@StoreEventImg');
Route::get('/events', 'NewsController@StoreEventImg');

Route::get('/finance', 'FinanceController@GetBanks');
Route::get('/history', 'FinanceController@GetHistory');
Route::get('/editprice', 'FinanceController@EditPrice');
Route::post('/editprice', 'FinanceController@EditPrice');

Route::get('/addbank', 'FinanceController@addbank');
Route::post('/addbank', 'FinanceController@addbank');

Route::get('/notifications', 'HomeController@Notifications');




// website 
Route::get('/islam', 'WebController@islam')->name('web.islam');


Route::get('/profile', 'HomeController@profile');
Route::get('/details-notifications', 'HomeController@detailsnotifications');
 

Route::get('/media', 'NewsController@media');



 Route::get('/edit-about' , function () {
 	
 	if(Auth::user()->department_id == App\Pointer::$Issued || Auth::user()->department_id == App\Pointer::$Manager){
 		
	return view('cpac.media.edit-about');
 	}else
 		return redirect('/home');
 
 });
 
 
 Route::get('/edit-donation' , function () {
 	
 	if(Auth::user()->department_id == App\Pointer::$Issued || Auth::user()->department_id == App\Pointer::$Manager){
 		
 		
	return view('cpac.media.edit-donation');
 	}else
 		return redirect('/home');
 
 });
	
 	
 Route::get('/edit-islam' , function () {
 	if(Auth::user()->department_id == App\Pointer::$Issued || Auth::user()->department_id == App\Pointer::$Manager){
 		
	return view('cpac.media.edit-islam');
 	}else 
 		return redirect('/home');
 	
 });
 	
 
 
Route::post('/StoreAbout', 'NewsController@StoreAbout');
Route::post('/StoreIslam', 'NewsController@Islam');
Route::post('/StoreDon', 'NewsController@StoreDonation');

 

// Public Site.

Route::get('/Library', 'WebController@ShowBooks');
Route::get('/Home','WebController@index');
Route::get('/About', 'WebController@About');
Route::get('/news', 'WebController@ShowPostDetail');
Route::get('/more', 'WebController@ShowNewsForPublic');

Route::get('/',function (){
	return redirect('/Home');
});
