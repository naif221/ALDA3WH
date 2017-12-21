<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Author;
use Illuminate\Support\Facades\Auth;
use App\Language;
use App\Books;
use Illuminate\Support\Facades\DB;
use App\Pointer;

class LibraryController extends Controller
{
    
	
	/**
	 * 
	 *Todo
	 *
	 * ---Books---
	 * Show Books
	 * Store Books
	 * Remove Books 
	 * Update Books
	 *
	 * 
	 *---Author---
	 * Show Authors
	 * Add Author
	 * Remove Author
	 * Update Autoher
	 * 
	 * 
	 * 
	 * ---Language---
	 * Show Languages
	 * Add Lnaguage 
	 * 
	 */
	
	public function __construct()
	{
		$this->middleware('auth');
	}
	
	
	public function AddAuthor(Request $request)
	{
		
		if(!Auth::user()->department_id === Pointer::$Issued || !Auth::user()->department_id === Pointer::$Manager)
		return redirect('/home');
		
		if($request->isMethod('get')){
			
			return view('cpac.library.new-author');	
		}else {
		
		$this->validate($request, [
			'name' 	=> 'required',
		]);
		
		$author = new Author();
		$author->name = $request->input('name');
		$author->save();
		}
		return redirect('/author');
		
	}
	
	public function AddLanguage(Request $request)
	{
		if(!Auth::user()->department_id === Pointer::$Issued || !Auth::user()->department_id === Pointer::$Manager){
			
			return redirect('/home');
		}
			
		
		if ($request->isMethod('get')) {
			
			return view('cpac.library.new-language');
		}else {
			
			$this->validate($request, [
					'language' 	=> 'required',
			]);
			
			$lang = new Language();
			$lang->language = $request->input('language');
			$lang->save();
			
			return redirect('/languages');
		}
		
	}

	public function ShowLanguages(){
		
		if(!Auth::user()->department_id === Pointer::$Issued || !Auth::user()->department_id === Pointer::$Manager){
			
			return redirect('/home');
		}
		
		$lang = Language::all()->load('books');
		
		return view('cpac.library.language', ['languages' => $lang]);
	}
	
	public function AddBook(Request $request)
	{

		if(!Auth::user()->department_id === Pointer::$Issued || !Auth::user()->department_id === Pointer::$Manager){
			
			return redirect('/home');
		}
		
		if ($request->isMethod('get')) {
			
			$Lang = Language::all();
			$Auhtors = Author::all();
			return view('cpac.library.new-book', ['Lang' => $Lang, 'Auhtors' => $Auhtors]);
		}else {
		
			if(is_null($request->input('author'))){
			
			$this->validate($request, [
					'name' 			=> 'required',
					'author_id' 	=> 'required',
					'barcode' 		=> 'nullable',
					'language_id' 	=> 'required',
					'in_stock' 		=> 'required|numeric',
			]);
			
			$book 				= new Books();
			$book->barcode 		= $request->input('barcode');
			$book->name 		= $request->input('name');
			$book->author_id	= $request->input('author_id');
			$book->language_id	= $request->input('language_id');
			$book->in_stock		= $request->input('in_stock');
			
			$book->save();
			
			} else {
				
				$this->validate($request, [
						'name' 			=> 'required',
						'barcode' 		=> 'nullable',
						'language_id' 	=> 'required',
						'in_stock' 		=> 'required|numeric',
						'author' 		=> 'required',
						
				]);
				
				$author= Author::where('name','=',$request->input('author'))->first();
				if($author === null){
					
				$author = new Author();
				$author->name = $request->input('author');
				$author->save();
					
				}
				
				$book 				= new Books();
				$book->barcode 		= $request->input('barcode');
				$book->name 		= $request->input('name');
				$book->author_id	= $author->id;
				$book->language_id	= $request->input('language_id');
				$book->in_stock		= $request->input('in_stock');
				
				$book->save();
				
			}

		}
			return redirect('/books');
			
	}
	
	public function UpdateBook(Request $request)
	{
			
		if(Auth::user()->department_id === Pointer::$Issued || Auth::user()->department_id === Pointer::$Manager){
			
		
		if($request->isMethod('get')){
			$book = Books::find($request->input('id'));
			$author = Author::all();
			$language = Language::all();
			return view('cpac.library.edit-book',['Book' => $book , 'Lang' => $language , 'Author' => $author]);
			
		}else {
			$this->validate($request, [
					'name' 			=> 'required',
					'author_id' 	=> 'required',
					'barcode' 		=> 'nullable',
					'language_id' 	=> 'required',
					'in_stock' 		=> 'required|numeric',
			]);
			
			$Book 					= Books::find($request->input('id'));
			$Book->name 			= $request->input('name');
			$Book->author_id		= $request->input('author_id');
			$Book->language_id		= $request->input('language_id');
			$Book->barcode			= $request->input('barcode');
			$Book->in_stock			= $request->input('in_stock');
			$Book->save();
			
		}
			return redirect('/books');
			
		}else 
			return redirect('/home');
	}
	
	
	public function DecreaseBookByOne($id)
	{
		if(Auth::user()->department_id === Pointer::$Issued || Auth::user()->department_id === Pointer::$Manager){
		DB::table('books')->where('id', $id)->decrement('in_stock', 1);
		}
		
			return redirect('/books');
	}
	
	public function IncrementBookByOne($id)
	{
		if(Auth::user()->department_id === Pointer::$Issued || Auth::user()->department_id === Pointer::$Manager){
			
			DB::table('books')->where('id', $id)->increment('in_stock', 1);
		}
			return redirect('/books');
			
	}
	
	public function ShowBooks(){
		

		if(Auth::user()->department_id === Pointer::$Issued || Auth::user()->department_id === Pointer::$Manager){
			
		$books = Books::all();
		
		return view('cpac.library.books' , ['books' => $books]);
		}else 
			return redirect('/home');
		
	}
	
	public function ShowAuthors(){
		if(Auth::user()->department_id === Pointer::$Issued || Auth::user()->department_id === Pointer::$Manager){
			
		$Author = Author::all();
		
		return view('cpac.library.author' , ['Author' => $Author]);
		}else 
			return redirect('/home');
		
	}
	
	
	public function EditInStock(Request $Request){
		if(Auth::user()->department_id === Pointer::$Issued || Auth::user()->department_id === Pointer::$Manager){
		$Book = Books::find($Request->input('id'));
		$Book->in_stock = $Request->input('in_stock');
		$Book->save();
		
		return redirect('/books');
			
		}else 
			return redirect('/home');
		
	}
	
	
	
}
