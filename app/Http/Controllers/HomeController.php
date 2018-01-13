<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Request_;
use Illuminate\Support\Facades\DB;
use App\User;
use Illuminate\Http\Request;
use App\Department;
use App\Pointer;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
	
	
	public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */




	public function price()
    {
    	
    	return view('cpac.finance.price');
    	
	}
	
	public function editprice()
    {
    	
    	return view('cpac.finance.editprice');
    	
	}
	
	public function history()
    {
    	
    	return view('cpac.finance.history');
    	
	}


	public function detailsnotifications()
    {
    	
    	return view('cpac.details-notifications');
    	
    }
	
	public function notifications()
    {
    	
    	return view('cpac.notifications');
    	
    }
	

    public function index()
    {
    	
    	return view('cpac.home');
    	
    }
    
    public function ShowEmployees(){
    	
    	if(Auth::user()->department_id !== Pointer::$Manager)
    		return redirect('/home');
    	
    	$users = User::all();
    	return view('cpac.employees.employees' , ['users' => $users]);
    }
    
    public function GetEditEmployee(Request $Request){
    	
    	if(Auth::user()->department_id !== Pointer::$Manager)
    		return redirect('/home');
    	
    	$User = User::find($Request->input('id'));
    	$Departments = Department::all();
    	
    	
    	return view('cpac.employees.edit-employee',['User' =>$User , 'Dep' => $Departments]);
    }
    
    public function EditEmployee(Request $Request){
    	
    	if(Auth::user()->department_id !== Pointer::$Manager)
    		return redirect('/home');
    	
    	$this->validate($Request, [
    			'id'			=> 'required',
    			'name' 			=> 'required|max:40',
    			'phone'			=> 'required|max:10',
    			'email'			=> 'required|email',
    			'password'		=> 'required|min:6',
    			'department_id'	=> 'required',
    	]);
    	
    	$user =  			User::find($Request->input('id'));
    	$user->name 		= $Request->input('name');
    	$user->phone 		= $Request->input('phone');
    	$user->email 		= $Request->input('email');
    	$user->password 	= $Request->input('name');
    	$user->department_id= $Request->input('department_id');
    	$user->password		= bcrypt($Request->input('password'));
    	$user->save();
    	
    	return redirect('employees')->with('success','تم تعديل بيانات الموظف بنجاح.');
    }
    
    public function AddEmployee(Request $Request){
    	
    	if(Auth::user()->department_id !== Pointer::$Manager)
    		return redirect('/home');
    	
    	$this->validate($Request, [
    			'name' 			=> 'required|max:40',
    			'phone'			=> 'required|max:10',
    			'email'			=> 'required|email',
    			'password'		=> 'required|min:6',
    			'department_id'	=> 'required',
    	]);

    	$user = new User();
    	$user->name 		= $Request->input('name');
    	$user->phone 		= $Request->input('phone');
    	$user->email 		= $Request->input('email');
    	$user->department_id= $Request->input('department_id');
    	$user->password		= bcrypt($Request->input('password'));
    	$user->save();
    	
    	return redirect('employees')->with('success','ثم اضافة الموظف بنجاح.');
    }
    
    public function GetDepartments(){
    	
    	if(Auth::user()->department_id !== Pointer::$Manager)
    		return redirect('/home');
    	
    	$Departments = Department::all();
    	
    	return view('cpac.employees.new-employees', ['Dep' => $Departments]);
    	
    }
    
    public function GetDepartmentsForD(){
    	
    	if(Auth::user()->department_id !== Pointer::$Manager)
    		return redirect('/home');
    	
    	 $Departments = Department::all()->load('user')->load('request');
    	
    	return view('cpac.department.department', ['Dep' => $Departments]);
    	
    }
    
    public function GetEditDepartment(Request $Request){
    	
    	if(Auth::user()->department_id !== Pointer::$Manager)
    		return redirect('/home');
    	
    	$Departments = Department::find($Request->input('id'));
    	
    	
    	return view('cpac.department.edit-department',['Dep' => $Departments]);
    }
    
    public function EditDepartment(Request $Request){
    	
    	if(Auth::user()->department_id !== Pointer::$Manager)
    		return redirect('/home');
    	
    	$this->validate($Request, [
    			'department_name'	=> 'required',
    			'description'		=> 'nullable',
    	]);
    	
    	$Departments = Department::find($Request->input('id'));
    	
    	$Departments->department_name 	= $Request->input('department_name');
    	$Departments->description 		= $Request->input('description');
    	
    	$Departments->save();
    	
    	return redirect('department')->with('success','تم تعديل القسم');
    }

    public function GetNewDepartmentPage(){
    	
    	if(Auth::user()->department_id !== Pointer::$Manager)
    		return redirect('/home');
    	
    	return view('cpac.department.new-department');
    }
    
    public function AddDepartment(Request $Request){
    	
    	if(Auth::user()->department_id !== Pointer::$Manager)
    		return redirect('/home');
    	
    	$this->validate($Request, [
    			'department_name'	=> 'required',
    			'description'		=> 'nullable',
    	]);
    	
    	$Departments = new Department();
    	$Departments->department_name 	= $Request->input('department_name');
    	$Departments->description 		= $Request->input('description');
    	$Departments->save();
    	
    	return redirect('department')->with('success','تم أضافة القسم');
    	
    }
    
	
    public function profile(Request $Request){
    	
		$users = User::all();
    	return view('cpac.profile' , ['users' => $users]);
    	
    }
    
    public function DeleteDepartment($id){
    	
    	if( $id != Pointer::$Media   &&
    	    $id != Pointer::$Jalyat  &&
    		$id != Pointer::$Council &&
    		$id != Pointer::$Library &&
    		$id != Pointer::$Manager &&
    		$id != Pointer::$Issued	 &&
    		$id != Pointer::$Services){
    		
    	$dep = Department::find($id);
    	$dep->delete();
    	return redirect('department')->with('success','تم حذف هذا القسم بنجاح.');
    	}else {
    		return redirect('department')->with('error','لا يمكنك حذف هذا القسم.');
    	}
    }
	

}
