<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Issued;
use Illuminate\Support\Facades\Auth;
use App\Pointer;
use Illuminate\Support\Facades\Storage;

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
		}else{
		
			$this->validate($request, [
					'title' 		=> 'required',
					'file_path'		=> 'required',
			]);
			
			
			$path;
			// Handle File Upload
			if($request->hasFile('file_path')){
				// Get filename with the extension
				$filenameWithExt = $request->file('file_path')->getClientOriginalName();
				// Get just filename
				$filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
				// Get just ext
				$extension = $request->file('file_path')->getClientOriginalExtension();
				// Filename to store
				$fileNameToStore= $filename.'_'.time().'.'.$extension;
				// Upload Image
				 $path = $request->file('file_path')->storeAs('/Issued', $fileNameToStore);
			} else {
				return view('cpac.archive.archives');
			}
			
			$iss 				= new Issued();
			$iss->title			= $request->input('title');
			$iss->user_id		= Auth::user()->id;
			$iss->file_path		= $path;
			$iss->save();
			
			
		}
			return redirect('archives');
	}
	
	
	public function Details(Request $request){
		
		
		if($request->isMethod('get')){
			
			$Iss = Issued::find($request->input('id'));
			return view('cpac.archive.details-archive', ['Iss' =>$Iss]);
		}else {
			
		}
		
	}
	
}
