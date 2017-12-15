<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Issued;
use Illuminate\Support\Facades\Auth;
use App\Pointer;

class IssuedController extends Controller
{
	
	/*
	 * Store
	 * Update
	 * Show
	 * Delete
	 */
	
	public function __construct()
	{
		$this->middleware('auth');
	}
	
	public function ShowArchive(){
		
		$issued = Issued::all();
		
		return view('cpac.archive.archives', ['iss' =>$issued]);
	}
	
	
	
	public function StoreIssued(Request $request)
	{
			
		if($request->isMethod('get')){
			
			return view('cpac.archive.new-archive');
		}
		
			$this->validate($request, [
					'title' 		=> 'required',
					'file_path'		=> 'required',
			]);
			
			$iss 				= new Issued();
			$iss->title			= $request->input('title');
			$iss->file_path		= $request->input('file_path');
			$iss->creator_name	= $request->input('creator_name');
			$iss->done_at		= $request->input('done_at');
			$iss->save();
			
			return redirect('archives');
	}
	
	
}
