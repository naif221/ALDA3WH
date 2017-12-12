<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Request_;
use Illuminate\Support\Facades\Auth;
use App\StateCodes;
use App\State;

class RequestsController extends Controller
{
    //
    
	/*
	 * Handle Requests
	 * 
	 * Store 
	 * Delete 
	 * Show
	 * Update
	 * And so on !
	 */
	
	
	public function __construct()
	{
		$this->middleware('auth');
	}
	
	
	
	
	public function store(Request $request)
	{
		
		$this->validate($request, [
				'title' 	=> 'required',
 				'content'	=> 'required',
				'price'		=> 'nullable',
		]);
			
		$request_ 			= new Request_;
		$request_->title 	= $request->input('title');
		$request_->content	= $request->input('content');
		$request_->price	= $request->input('price');
		$request_->user_id	= Auth::id();
		$request_->state_id	= 2;
		$request_->save();
		
		return redirect('/requests');
		
	}
	
	
	
}
