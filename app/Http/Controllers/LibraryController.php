<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LibraryController extends Controller
{
    
	
	/**
	 * 
	 *Todo
	 *
	 * ---Books---
	 * Show Books
	 *Store Books
	 *Remove Books 
	 *Update Books
	 *
	 * 
	 *---Author---
	 *Show Authors
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
	
	
	
}
