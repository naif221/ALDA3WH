<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Request_;
use App\Department;
use App\State;
use App\User;
use App\Pointer;
use Psy\Command\WhereamiCommand;
use Illuminate\Foundation\Console\Presets\React;
use phpDocumentor\Reflection\DocBlock\Tags\Return_;

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
	
	
	public function Transact(Request $Request){
		
		if(Auth::user()->department_id !== Pointer::$Manager){
			return redirect('/');
		}
		
		$this->CheckIFAuthorize();
		
		$this->validate($Request, [
				'id' 		=> 'required',
				'selected'	=> 'required',
		]);
		
		$Selected 	= $Request->input('selected');
		$ID 		= $Request->input('id');
		
		$request = Request_::find($ID);
		
		switch ($Selected) {
			case Pointer::$Council:
				$request->state_id = Pointer::$UnderStudyFromCouncil;
			break;
			
			case Pointer::$Jalyat:
				$request->state_id = Pointer::$ToJalyat;
				break;
				
			case Pointer::$Issued:
				$request->state_id = Pointer::$ToIssued;
				break;
				
			case Pointer::$Library:
				$request->state_id = Pointer::$ToLibrary;
				break;
				
			case Pointer::$Media:
				$request->state_id = Pointer::$ToMedia;
				break;
				
			case Pointer::$Services:
				$request->state_id = Pointer::$ToServices;
				break;
		}

		
		$request->save();
		
		return redirect('/requests');
		
	}
	
	public function NewRequest(){
		
		return view('cpac.requests.new-request');
	}
	
	public function RequestDetails(Request $id){
		
		$this->validate($id, [
				'id' 	=> 'required',
		]);
		
		$request = Request_::all()->where('id', $id->input('id'));
		return view('cpac.requests.details-request', ['details' => $request]);
	}
	

	public function RequestAccept(Request $id){
		
		if(Auth::user()->department_id !== Pointer::$Manager){
			return redirect('/');
		}
		
		$this->validate($id, [
				'id' 	=> 'required',
		]);
		
		$request = Request_::find($id->input('id'));
		$request->state_id = Pointer::$Accepted;
		$request->save();
		
		return redirect('/requests');
		
	}
	
	public function RequestReject(Request $id){
		
		if(Auth::user()->department_id !== Pointer::$Manager){
			return redirect('/');
		}
		
		$this->validate($id, [
				'id' 	=> 'required',
		]);
		
		$request = Request_::find($id->input('id'));
		$request->state_id = Pointer::$Rejected;
		$request->save();
		
		return redirect('/requests');
		
	}
	
	public function Show(){
		
		$UserDepartment = Auth::user()->department_id;
		
		 $requests= DB::table('users')
		->join('department', 'users.department_id', '=', 'department.id')
		->join('request', 'request.user_id', '=', 'users.id')
		->join('state', 'request.state_id', '=', 'state.id')
		->select('request.id','request.title','request.price','request.created_at' ,'department.department_name','state.title AS state')
		->whereIn('state.id', [Pointer::$UnderStudy , Pointer::$UnderStudyFromCouncil])
		->where('department.id',$UserDepartment)
		->get();
		
 		return view('cpac.requests.requests', ['requests' => $requests]);
	}
	
	
	public function ShowAcceptedRequests(){
		
		$UserDepartment = Auth::user()->department_id;
		
		$requests= DB::table('users')
		->join('department', 'users.department_id', '=', 'department.id')
		->join('request', 'request.user_id', '=', 'users.id')
		->join('state', 'request.state_id', '=', 'state.id')
		->select('request.id','request.title','request.price','request.created_at' ,'department.department_name','state.title AS state')
		->whereIn('state.id', $this->GetIDs($UserDepartment))
		->where('department.id',$UserDepartment)
		->get();
		
		return view('cpac.requests.requests', ['requests' => $requests]);
	}
	
	public function ShowRejectedRequests(){
		
		$UserDepartment = Auth::user()->department_id;
		
		 $requests= DB::table('users')
		->join('department', 'users.department_id', '=', 'department.id')
		->join('request', 'request.user_id', '=', 'users.id')
		->join('state', 'request.state_id', '=', 'state.id')
		->select('request.id','request.title','request.price','request.created_at' ,'department.department_name','state.title AS state')
		->whereIn('state.id', [Pointer::$UnderStudy , Pointer::$UnderStudyFromCouncil])
		->where('department.id',$UserDepartment)
		->get();
		
		return view('cpac.requests.requests', ['requests' => $requests]);
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
		$request_->user_id			= Auth::id();
		$request_->price			= $request->input('price');
		
		if(is_null($request->input('price')))
		$request_->state_id			= Pointer::$UnderStudy;
			else
		$request_->state_id			= Pointer::$UnderStudyFromCouncil;
			
		$request_->save();
		
		return redirect('/requests');
		
	}
	
	
	private function GetIDs($DepartmentID){
		
		$TheID;
		
		switch ($DepartmentID) {
				
			case Pointer::$Jalyat:
				$TheID = Pointer::$ToJalyat;
				break;
				
			case Pointer::$Issued:
				$TheID = Pointer::$ToIssued;
				break;
				
			case Pointer::$Library:
				$TheID = Pointer::$ToLibrary;
				break;
				
			case Pointer::$Media:
				$TheID = Pointer::$ToMedia;
				break;
				
			case Pointer::$Services:
				$TheID = Pointer::$ToServices;
				break;
		}
		
		
		return [Pointer::$Accepted , Pointer::$AcceptedFromCouncil , $TheID];
		
	}
	
	
}
