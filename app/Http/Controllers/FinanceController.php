<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bank;
use App\History;
use App\Pointer;
use Illuminate\Support\Facades\Auth;
class FinanceController extends Controller
{
    //
    
	
	public function __construct()
	{
		$this->middleware('auth');
	}
	
	
	
	public function GetBanks(){
		if(Auth::user()->department_id != Pointer::$Finance || Auth::user()->department_id != Pointer::$Manager)
			return redirect('/home');
		
		if(Auth::user()->department_id != Pointer::$M || Auth::user()->department_id != Pointer::$Manager)
			return redirect('/home');
		
		$Banks = Bank::all();
		
		return view('cpac.finance.finance', ['Banks' => $Banks]);
	}
	
	
	public function GetHistory(){
		if(Auth::user()->department_id != Pointer::$Finance || Auth::user()->department_id != Pointer::$Manager)
			return redirect('/home');
		 $History = History::with('request')->get();
		
		return view('cpac.finance.history', ['History' => $History]);
	}
	
	public function EditPrice(Request $Request){
		
		if(Auth::user()->department_id != Pointer::$Finance || Auth::user()->department_id != Pointer::$Manager)
			return redirect('/home');
		$Banks = Bank::all();
		if($Request->isMethod('get')){
			
			return view('cpac.finance.editprice', ['Banks' => $Banks]);
			
		}else if($Request->isMethod('post')) {
			foreach ($Banks as $Bank){
			$this->validate($Request, [
					
					'amount'.$Bank->id  => 'required|numeric',
					'add'.$Bank->id 	=> 'nullable|numeric',
					'sub'.$Bank->id 	=> 'nullable|numeric',
			]);
			
			$CurrentAmount  = $Request->input('amount'.$Bank->id);
			if(!is_null($Request->input('add'.$Bank->id )))
			$ValueToAdd 	= $Request->input('add'.$Bank->id );
			else 
				$ValueToAdd = 0;
			if(!is_null($Request->input('sub'.$Bank->id )))
			$ValueToSub 	= $Request->input('sub'.$Bank->id);
			else 
				$ValueToSub = 0;
			
				$Bank->amount = $CurrentAmount + $ValueToAdd - $ValueToSub;
				$Bank->save();
			
			}
			
		}
		return redirect('/finance')->with('success','تم تعديل المعلومات بنجاح.');
	}
	
	
	public function EditBank(Request $Request){
		
		
		if(Auth::user()->department_id != Pointer::$Finance || Auth::user()->department_id != Pointer::$Manager)
			return redirect('/home');
		if($Request->isMethod('get')){
			$Banks = Bank::find($Request->input('id'));
			
			return view('cpac.finance.editbank', ['Banks' => $Banks]);
			
		}else if($Request->isMethod('post')) {
				$this->validate($Request, [
						'bank'  => 'required',
				]);
				
			$Bank->bank = $Request->input('bank');
			$Bank->save();
								
		}
		return redirect('/finance')->with('success','تم تعديل المعلومات بنجاح.');
		
	}
	
	
	public function AddBank(Request $Request){
		
		if(Auth::user()->department_id != Pointer::$Finance || Auth::user()->department_id != Pointer::$Manager)
			return redirect('/home');
		
		if($Request->isMethod('get')){
			
			return view('cpac.finance.addbank');
		} else if($Request->isMethod('post')) {
			$this->validate($Request, [
					'bank'  => 'required',
					'price'  => 'nullable|numeric',
			]);
			
			$Bank = new Bank();
			$Bank->bank = $Request->input('bank');
			if(is_null($Request->input('price')))
				$Bank->amount = 0;
				else 
				$Bank->amount = $Request->input('price');
				
			$Bank->save();
			
		}
		return redirect('/finance')->with('success','تم أضافة البنك المعلومات بنجاح.');;
		
	}
	
	
	
}
