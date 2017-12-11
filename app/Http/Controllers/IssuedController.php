<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Issued;
use Illuminate\Support\Facades\Auth;

class IssuedController extends Controller
{
    //
    
	
	/*
	 * 
	 * Store
	 * Update
	 * Show
	 * Delete
	 * 
	 * 
	 * 
	 */
	
	public function __construct()
	{
		$this->middleware('auth');
	}
	
	
	public function StoreIssued(Request $request)
	{
		if(Auth::user()->department_id == 1){
			
			$this->validate($request, [
					'title' 		=> 'required',
					'file_path'		=> 'required',
					'creator_name'	=> 'required',
					'done_at'		=> 'required'
			]);
			
			$iss 				= new Issued();
			$iss->id			= Issued::count();
			$iss->title			= $request->input('title');
			$iss->file_path		= $request->input('file_path');
			$iss->creator_name	= $request->input('creator_name');
			$iss->done_at		= $request->input('done_at');
			$iss->save();
			
			return redirect('/');
			
		}else
			return redirect('/home');
	}
	
	
}
