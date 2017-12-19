<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\News;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;
class NewsController extends Controller
{

	
	public function __construct()
	{
		$this->middleware('auth');
	}
	
	// intrnal !!
	public function ShowNews(){
		
		$Posts = News::all();
		
		return view('cpac.media.media-news',['posts' => $Posts]);
	}
	
	public function AddNews(Request $Request){
		
		if($Request->isMethod('get')){
			
			return view('cpac.media.new-news');
		}else {
			
			$this->validate($Request, [
					'title' 			=> 'required|max:200',
					'content'			=>'	required',
					'file_path'			=>'	nullable',
			]);
			
			
			$path;
			if($Request->hasFile('file_path')){
				// Get filename with the extension
				$filenameWithExt = $Request->file('file_path')->getClientOriginalName();
				// Get just filename
				$filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
				// Get just ext
				$extension = $Request->file('file_path')->getClientOriginalExtension();
				// Filename to store
				$fileNameToStore= $filename.'_'.time().'.'.$extension;
				// Upload Image
// 				 $path = $Request->file('file_path')->storeAs('/imgs', $fileNameToStore);
// 				Storage::put('/public/storage/imgs/', $fileNameToStore);
				$path = Storage::putFile('photos', new File($Request->file('file_path')) , 'public');
// 				 '/public/storage/imgs/'.$fileNameToStore;
			}else {
				$path = '/imgs/a.png';
			}
			
			
			
			$post 			= new News();
			$post->title 	= $Request->input('title');
			$post->content 	= $Request->input('content');
			$post->user_id	= Auth::user()->id;
			$post->file_path= asset($path);
			$post->save();
			
			return redirect('/media-news');
		
		}
	}
	
	public function EditPost(Request $Request){
		
		 
		 
		 if($Request->isMethod('get')){
		 	
		 	$posts = News::find($Request->input('id'));
		 	return view('cpac.media.edit-news', ['posts' => $posts]);
		 }else {
		 	
		 	$this->validate($Request, [
		 			'title' 			=> 'required|max:200',
		 			'content'			=>'	required',
		 	]);
		 	
		 	
		 	$post 			= News::find($Request->input('id'));
		 	$post->title	= $Request->input('title');
		 	$post->content 	= $Request->input('content');
		 	$post->user_id	= Auth::user()->id;
		 	$post->save();
		 	
		 	return redirect('/media-news');
		 }
		 
	}
	
	public function DeleteNews(Request $Request){
		
		if($Request->isMethod('get')){
			
			$post = News::find($Request->input('id'));
			if($post->file_path !== 'public/imgs/a.png'){
				Storage::delete('/app/'.$post->file_path);
				Storage::disk('local')->delete($post->file_path);
			}
			$post->delete();
			return redirect('media-news');
		}
		
	}
	
	
	
}