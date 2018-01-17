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
use App\Noti;
use App\History;

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
	 */
	
	public function __construct()
	{
		$this->middleware('auth');
	}
	
	
	public function AddComment(Request $Request){

		
		$Depname = Department::find(Auth::user()->department_id)->department_name;
		$ldate = date('Y-m-d H:i');
		$ID 		 = $Request->input('id');
		$NewComment  = $Request->input('comment');
		$req 		 = Request_::find($ID);
		$PervComment = $req->reason;
		/*
		 * date : created_at
		 * auth : user name
		 * auth : user department
		 * request comment
		 * 
		 * 
		 */
		$Div 		 = '
<div class="row">

<div class="col-lg-11 col-md-11 col-sm-10 col-xs-10">
<div class="panel panel-default">
<div class="panel-heading">
<strong> قسم '. $Depname .' / ' . Auth::user()->name.'</strong> 
</div>
<div class="panel-body">
'.
$NewComment.'</br>'
.' بتاريخ: '.$ldate.
'
</div><!-- /panel-body -->
</div><!-- /panel panel-default -->
</div><!-- /col-sm-5 -->


</div><!-- /row -->   '; // Here Must Be HTML Div
			
			$PervComment .= $Div;
		
			$req->reason = $PervComment;
			$req->save();
			
			return redirect('/requests');
		
	}
	
	
	public function DeleteRequest(Request $Request){
		
		$ID = $Request->input('id');
		$req = Request_::find($ID);
		if(Auth::user()->id === $req->user_id){
			$req->delete();
		}
		
		return redirect('/requests');
			
	}
	
	// it mean forward to another department, lack in english.
	public function Transact(Request $Request){
		
		if(Auth::user()->department_id !== Pointer::$Manager){
			return redirect('/');
		}
		
		
		$this->validate($Request, [
				'id' 		=> 'required',
				'selected'	=> 'required',
		]);
		
		$Selected 	= $Request->input('selected');
		$ID 		= $Request->input('id');
		
		$request = Request_::find($ID);
		
		switch ($Selected) {
			case Pointer::$Council:
				$this->Noty($request);
				$request->state_id 		= Pointer::$UnderStudyFromCouncil;
				$noti 					= new Noti();
				$noti->request_id 		= $request->id;
				$noti->seen 			= false;
				$noti->department_id 	= Pointer::$Council;
				$noti->save();
			break;
			
			case Pointer::$Jalyat:
				$request->state_id = Pointer::$ToJalyat;
				$this->Noty($request);
				$noti 					= new Noti();
				$noti->request_id 		= $request->id;
				$noti->seen 			= false;
				$noti->department_id 	= Pointer::$Jalyat;
				$noti->save();
				break;
				
			case Pointer::$Issued:
				$request->state_id = Pointer::$ToIssued;
				$this->Noty($request);
				$noti 					= new Noti();
				$noti->request_id 		= $request->id;
				$noti->seen 			= false;
				$noti->department_id 	= Pointer::$Issued;
				$noti->save();
				break;
				
			case Pointer::$Library:
				$request->state_id = Pointer::$ToLibrary;
				$this->Noty($request);
				$noti 					= new Noti();
				$noti->request_id 		= $request->id;
				$noti->seen 			= false;
				$noti->department_id 	= Pointer::$Library;
				$noti->save();
				break;
				
			case Pointer::$Media:
				$request->state_id = Pointer::$ToMedia;
				$this->Noty($request);
				$noti 					= new Noti();
				$noti->request_id 		= $request->id;
				$noti->seen 			= false;
				$noti->department_id 	= Pointer::$Media;
				$noti->save();
				break;
				
			case Pointer::$Services:
				$request->state_id = Pointer::$ToServices;
				$this->Noty($request);
				$noti 					= new Noti();
				$noti->request_id 		= $request->id;
				$noti->seen 			= false;
				$noti->department_id 	= Pointer::$Services;
				$noti->save();
				break;
				
			case Pointer::$Finance:
				$request->state_id = Pointer::$UnderStudyFromFinance;
				$this->Noty($request);
				$request->state_id 		= Pointer::$UnderStudyFromFinance;
				$noti 					= new Noti();
				$noti->request_id 		= $request->id;
				$noti->seen 			= false;
				$noti->department_id 	= Pointer::$Finance;
				$noti->save();
				break;
		}

		
		$request->save();
		
		return redirect('/requests');
		
	}
	
	public function NewRequest(){
		
		return view('cpac.requests.new-request');
	}
	
	public function RequestDetails(Request $id){
		
		$request = Request_::all()->where('id', $id->input('id'));
		
		if(!is_null($id->input('newnoti'))){
			
			$notifcation = Noti::find($id->input('newnoti'));
			$notifcation->seen = true;
			$notifcation->save();
		}
		return view('cpac.requests.details-request', ['details' => $request]);
	}
	
	

	public function RequestAccept(Request $id){
		
			$request = Request_::find($id->input('id'));
		if(Auth::user()->department_id == Pointer::$Manager ){
			$request->state_id = Pointer::$Accepted;
			
		}else if(Auth::user()->department_id == Pointer::$Council){
			$request->state_id = Pointer::$AcceptedFromCouncil;
			
		}else if(Auth::user()->department_id == Pointer::$Finance){
			$request->state_id = Pointer::$AcceptedFromFinance;
			
			$History 				= new History();
			$History->request_id 	= $request->id;
			$History->user_id		= Auth::user()->id;
			$History->save();
			
		}else {
			return redirect('/home');
		}
		

			$request->responder_id = Auth::user()->id;
			$request->save();
			
			
			$noti 					= new Noti();
			$noti->request_id 		= $request->id;
			$noti->seen 			= false;
			$noti->department_id 	= $request->user->department_id;
			$noti->save();
			
		return redirect('/requests')->with('success','تم قبول الطلب بنجاح.');
		
	}
	
	public function RequestAcceptWithNoti(Request $id){
		
		$request = Request_::find($id->input('id'));
		if(Auth::user()->department_id == Pointer::$Manager ){
			$request->state_id = Pointer::$Accepted;
			
		}else if(Auth::user()->department_id == Pointer::$Council){
			$request->state_id = Pointer::$AcceptedFromCouncil;
			
		}else if(Auth::user()->department_id == Pointer::$Finance){
			$request->state_id = Pointer::$AcceptedFromFinance;
			
		}else {
			return redirect('/home');
		}
		
		
		
		// Send Notifcation.
		
		$Department = Department::all();
		foreach ($Department as $dep){
			
			if (!is_null($id->input($dep->id))){
				$noti 					= new Noti();
				$noti->request_id 		= $request->id;
				$noti->seen 			= false;
				$noti->department_id 	= $dep->id;
				$noti->save();
			}
		}
		
		
		
		$request->responder_id = Auth::user()->id;
		$request->save();
		return redirect('/requests')->with('success','تم قبول الطلب بنجاح مع إشعار الاقسام.');
		
	}
	
	public function RequestReject(Request $id){
		
		$request = Request_::find($id->input('id'));
		if(Auth::user()->department_id == Pointer::$Manager ){
			$request->state_id = Pointer::$Rejected;
		}else if(Auth::user()->department_id == Pointer::$Council){
			$request->state_id = Pointer::$AcceptedFromCouncil;
		}else if(Auth::user()->department_id == Pointer::$Finance){
			$request->state_id = Pointer::$RejectedFromFinance;
		}else {
			return redirect('/home');
		}
		
		$request->responder_id = Auth::user()->id;
		$request->save();
		
		
		
		
		$noti 					= new Noti();
		$noti->request_id 		= $request->id;
		$noti->seen 			= false;
		$noti->department_id 	= $request->user->department_id;
		$noti->save();
		
		return redirect('/requests')->with('success','تم رفض الطلب .');
		
		
	}
	
	public function Show(){
		
		
		$UserDepartment = Auth::user()->department_id;
		
		if($UserDepartment == Pointer::$Manager){
			
			$requests= DB::table('users')
			->join('department', 'users.department_id', '=', 'department.id')
			->join('request', 'request.user_id', '=', 'users.id')
			->join('state', 'request.state_id', '=', 'state.id')
			->select('request.id','request.title','request.price','request.created_at' ,'request.user_id' ,'department.department_name','state.title AS state')
			->whereIn('state.id', [Pointer::$UnderStudy , Pointer::$AcceptedFromFinance])
			->get();
			
			
			$oldrequests= DB::table('users')
			->join('department', 'users.department_id', '=', 'department.id')
			->join('request', 'request.user_id', '=', 'users.id')
			->join('state', 'request.state_id', '=', 'state.id')
			->select('request.id','request.title','request.price','request.created_at' ,'request.user_id' ,'department.department_name','state.title AS state')
			->whereIn('state.id', [Pointer::$Accepted , Pointer::$Rejected , Pointer::$AcceptedFromCouncil , Pointer::$RejectedFromCouncil, Pointer::$RejectedFromFinance])
			->get();
			
			
		}else if($UserDepartment == Pointer::$Council){
			
			
			//Show Users Requests all departments
			$requests= DB::table('users')
			->join('department', 'users.department_id', '=', 'department.id')
			->join('request', 'request.user_id', '=', 'users.id')
			->join('state', 'request.state_id', '=', 'state.id')
			->select('request.id','request.title','request.price','request.created_at' ,'request.user_id' ,'department.department_name','state.title AS state')
			->whereIn('state.id', [Pointer::$UnderStudyFromCouncil])
			->get();
			
			
			$oldrequests= DB::table('users')
			->join('department', 'users.department_id', '=', 'department.id')
			->join('request', 'request.user_id', '=', 'users.id')
			->join('state', 'request.state_id', '=', 'state.id')
			->select('request.id','request.title','request.price','request.created_at' ,'request.user_id' ,'department.department_name','state.title AS state')
			->whereIn('state.id', [Pointer::$AcceptedFromCouncil , Pointer::$RejectedFromCouncil])
			->get();
			
			
		}else if($UserDepartment == Pointer::$Finance){
			
			
			//Show Users Requests all departments
			$requests= DB::table('users')
			->join('department', 'users.department_id', '=', 'department.id')
			->join('request', 'request.user_id', '=', 'users.id')
			->join('state', 'request.state_id', '=', 'state.id')
			->select('request.id','request.title','request.price','request.created_at' ,'request.user_id' ,'department.department_name','state.title AS state')
			->whereIn('state.id', [Pointer::$UnderStudyFromFinance])
			->get();
			
			
			$oldrequests= DB::table('users')
			->join('department', 'users.department_id', '=', 'department.id')
			->join('request', 'request.user_id', '=', 'users.id')
			->join('state', 'request.state_id', '=', 'state.id')
			->select('request.id','request.title','request.price','request.created_at' ,'request.user_id' ,'department.department_name','state.title AS state')
			->whereIn('state.id', [Pointer::$AcceptedFromFinance, Pointer::$RejectedFromFinance])
			->get();
			
			
		}else {
		
		// Show Users Request , it's show his department Only , All states ofcource
		 $requests= DB::table('users')
		->join('department', 'users.department_id', '=', 'department.id')
		->join('request', 'request.user_id', '=', 'users.id')
		->join('state', 'request.state_id', '=', 'state.id')
		->select('request.id','request.title','request.price','request.created_at' ,'request.user_id' ,'department.department_name','state.title AS state')
		->whereIn('state.id', [Pointer::$UnderStudy , Pointer::$UnderStudyFromCouncil, Pointer::$UnderStudyFromFinance,Pointer::$AcceptedFromFinance,])
		->where('department.id',$UserDepartment)
		->get();
		 
		
		$oldrequests= DB::table('users')
		->join('department', 'users.department_id', '=', 'department.id')
		->join('request', 'request.user_id', '=', 'users.id')
		->join('state', 'request.state_id', '=', 'state.id')
		->select('request.id','request.title','request.price','request.created_at' ,'request.user_id' ,'department.department_name','state.title AS state')
		->whereIn('state.id', [Pointer::$Accepted , Pointer::$Rejected , Pointer::$AcceptedFromCouncil , Pointer::$RejectedFromCouncil, Pointer::$RejectedFromFinance])
		->where('department.id',$UserDepartment)
		->get();
		
		}
		
		
		
 		return view('cpac.requests.requests', ['requests' => $requests , 'oldrequests' => $oldrequests]);
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
		$request_->state_id			= Pointer::$UnderStudy;
		
		$request_->save();

		$noti 					= new Noti();
		$noti->request_id 		= $request_->id;
		$noti->seen 			= false;
		$noti->department_id 	= Pointer::$Manager;
		$noti->save();
		
		return redirect('/requests')->with('success','تم رفع الطلب بنجاح.');
		
	}
	
	private function Noty($request){
		$noti 					= new Noti();
		$noti->request_id 		= $request->id;
		$noti->seen 			= false;
		$noti->department_id 	= $request->user->department_id;
		$noti->save();
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
