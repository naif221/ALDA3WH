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
	
	
	public function DownloadFile(Request $Request){
		
		
		$entry = Issued::find($Request->input('id'));
		$entry->file_path;
		
		//since you want to ouput this photo to your browser, you set the header stuff
		$headers = array('Content-Type' => 'image/png');
		
		//now create your new response here
		$response = \Response::download(storage_path('app/'.$entry->file_path),'', $headers);
		
		//HERE IS THE MAGIC FOLKS
		ob_end_clean();
		
		//now this works like a charm; or whatever you like to call it;
		return $response;
		
		
		return response()->download();
		
	}
	
	public function DeleteArchive(Request $Request){
		
		$entry = Issued::find($Request->input('id'));
		Storage::delete('/app/'.$entry->file_path);
		$entry->delete();
		Storage::disk('local')->delete($entry->file_path);
		
		return redirect('archives');
		
	}
}
