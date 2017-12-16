<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\News;
use Illuminate\Support\Facades\Auth;


class NewsController extends Controller
{

	
	public function __construct()
	{
		$this->middleware('auth');
	}
	
	
	
	
	public function ShowNews(){
		
		$Posts = News::all()->latest()->paginate(6);
		
		return view('cpac.media.media-news',['posts' => $Posts]);
	}
	
	public function AddNews(Request $Request){
		
		
		if($Request->isMethod('get')){
			
			return view('cpac.media.new-news');
		}else {
			
			$this->validate($Request, [
					'title' 			=> 'required|max:200',
					'content'			=>'	required',
			]);
			
			
			$post 			= new News();
			$post->title 	= $Request->input('title');
			$post->content 	= $Request->input('content');
			$post->user_id	= Auth::user()->id;
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
	
	
}