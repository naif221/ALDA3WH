<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Request_;
use App\Department;
use App\State;
use App\User;


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
	
	
	private $UnderStudy = 1;
	private $State = 1;
	public function __construct()
	{
		$this->middleware('auth');
	}
	
	
	
	public function Show(){
		
		
		// Show Only The Requests from user department , i must check if he is admin or not !
		$requests = DB::table('request')->where('state_id',$this->UnderStudy)->whereIn('user_id', function($query) use ($UserDepartment){
			$query->select('id')
			->from('users')
			->where('department_id', $UserDepartment);
		})
		->get();
		
		$UserDepartment_info = Department::find(Auth::user()->department_id);
		$state_info 		 = State::find(1);
		
		return view('cpac.requests', ['requests' => $requests , 'department_name' => $UserDepartment_info,'State' => $state_info]);
	}
	
	
	public function store(Request $request)
	{
		
		$this->validate($request, [
				'title' 	=> 'required',
 				'content'	=> 'required',
				'price'		=> 'nullable',
		]);
			
		$request_ 					= new Request_;
		$request_->title 			= $request->input('title');
		$request_->content			= $request->input('content');
		$request_->price			= $request->input('price');
		$request_->user_id			= Auth::id();
		$request_->state_id			= 1;
		$request_->save();
		
		return redirect('/requests');
		
	}
	
	
	
}
