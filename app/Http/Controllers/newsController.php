<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\News;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;
use App\MuslimsCount;
use App\Event;
use App\About;
use App\Islam;
use App\Donation;
use App\Banner;
use App\Pointer;
class NewsController extends Controller
{

	
	public function __construct()
	{
		$this->middleware('auth');
		

	}
	
	public function StoreEventImg(Request $Request){
		
		
		if(!Auth::user()->department_id === Pointer::$Media || !Auth::user()->department_id === Pointer::$Manager)
			return redirect('/home');
		
		
		if($Request->isMethod('get')){
			
			return view('cpac.media.events', []);
		
		}else {
			
			$this->validate($Request, [
					
					'file_path' => 'required',
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
				$path = Storage::putFile('public/news_logo', new File($Request->file('file_path')) , 'public');
				// 				 '/public/storage/imgs/'.$fileNameToStore;
				$path = str_replace("public","storage",$path);
			}else {
				$path = 'storage/news_logo/default.png';
			}
			
			
			$EventImg =  Event::find(1);
			if($EventImg->img_path == asset('storage/news_logo/default.png'))
			unlink(str_replace(asset(''),"",$EventImg->img_path));
			
			$EventImg->img_path= asset($path);
			$EventImg->save();
			
		}
		
		return redirect('/media')->with('success','تم حفظ الفعاليات بنجاح.');
	}
	
	
	// intrnal !!
	public function ShowNews(){
		
		if(Auth::user()->department_id != Pointer::$Media || Auth::user()->department_id != Pointer::$Manager){
			return redirect('/home');
		}
		
		$Posts = News::all();
		
		return view('cpac.media.media-news',['posts' => $Posts]);
	}
	


	
	public function banner(Request $Request){
		
		
		if(!Auth::user()->department_id === Pointer::$Media || !Auth::user()->department_id === Pointer::$Manager)
			return redirect('/home');
		
		if($Request->isMethod('get')){
			$baners = Banner::all();
			return view('cpac.media.banner', ['banner' => $baners]);
			
		}else {
			
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
				$path = Storage::putFile('public/news_logo', new File($Request->file('file_path')) , 'public');
				// 				 '/public/storage/imgs/'.$fileNameToStore;
				$path = str_replace("public","storage",$path);
			}else {
				$path = 'storage/news_logo/default.png';
			}
			
			
			$EventImg =  Banner::find(1);
			if($EventImg->img_path !== asset('storage/news_logo/default.png')){
				return str_replace(asset(''),"",$EventImg->img_path);
				unlink(str_replace(asset(''),"",$EventImg->img_path));
				
			}
			$EventImg->img_path= asset($path);
			
			
			
			if($Request->hasFile('file_path2')){
				// Get filename with the extension
				$filenameWithExt = $Request->file('file_path2')->getClientOriginalName();
				// Get just filename
				$filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
				// Get just ext
				$extension = $Request->file('file_path')->getClientOriginalExtension();
				// Filename to store
				$fileNameToStore= $filename.'_'.time().'.'.$extension;
				// Upload Image
				// 				 $path = $Request->file('file_path')->storeAs('/imgs', $fileNameToStore);
				// 				Storage::put('/public/storage/imgs/', $fileNameToStore);
				$path = Storage::putFile('public/news_logo', new File($Request->file('file_path2')) , 'public');
				// 				 '/public/storage/imgs/'.$fileNameToStore;
				$path = str_replace("public","storage",$path);
			}else {
				$path = 'storage/news_logo/default.png';
			}
			
			if($EventImg->img_path2 !== asset('storage/news_logo/default.png')){
				unlink(str_replace(asset(''),"",$EventImg->img_path2));
			}
			$EventImg->img_path2= asset($path);
			
			if($Request->hasFile('file_path3')){
				// Get filename with the extension
				$filenameWithExt = $Request->file('file_path3')->getClientOriginalName();
				// Get just filename
				$filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
				// Get just ext
				$extension = $Request->file('file_path3')->getClientOriginalExtension();
				// Filename to store
				$fileNameToStore= $filename.'_'.time().'.'.$extension;
				// Upload Image
				// 				 $path = $Request->file('file_path')->storeAs('/imgs', $fileNameToStore);
				// 				Storage::put('/public/storage/imgs/', $fileNameToStore);
				$path = Storage::putFile('public/news_logo', new File($Request->file('file_path3')) , 'public');
				// 				 '/public/storage/imgs/'.$fileNameToStore;
				$path = str_replace("public","storage",$path);
			}else {
				$path = 'storage/news_logo/default.png';
			}
			

			if($EventImg->img_path3 !== asset('storage/news_logo/default.png')){
				unlink(str_replace(asset(''),"",$EventImg->img_path3));
			}
			
			$EventImg->img_path3= asset($path);
			$EventImg->save();
			
		}
		
		return redirect('/media')->with('success','تم تعديل الفعاليات بنجاح.');
	}
	


	public function muslims(Request $Request) {
		
		
		if(!Auth::user()->department_id === Pointer::$Media || !Auth::user()->department_id === Pointer::$Manager)
			return redirect('/home');
		
		if($Request->isMethod('get')){
			$M = MuslimsCount::find(1);
			
			return view('cpac.media.muslims', ['Count' => $M]);
		}else {
			
			$M = MuslimsCount::find(1);
			$M->count = $Request->input('numberM');
			$M->save();
			return redirect('/media')->with('success','تم تعديل عدد المسلمين.');
		}

		
		
	}
	

	public function Incrase(){
		
		
		if(!Auth::user()->department_id === Pointer::$Media || !Auth::user()->department_id === Pointer::$Manager)
			return redirect('/home');
		
		$M = MuslimsCount::find(1);
		$M->count = MuslimsCount::find(1)->count + 1;
		$M->save();
		return redirect('/media')->with('success','تم تعديل عدد المسلمين.');
		
	}
	
	public function Decrase(){
		
		
		if(!Auth::user()->department_id === Pointer::$Media || !Auth::user()->department_id === Pointer::$Manager)
			return redirect('/home');
		
		$M = MuslimsCount::find(1);
		$M->count = MuslimsCount::find(1)->count - 1;
		$M->save();
		return redirect('/media')->with('success','تم تعديل عدد المسلمين.');
	}
	

	public function AddNews(Request $Request){
		
		
		if(!Auth::user()->department_id === Pointer::$Media || !Auth::user()->department_id === Pointer::$Manager)
			return redirect('/home');
		
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
				$path = Storage::putFile('public/news_logo', new File($Request->file('file_path')) , 'public');
// 				 '/public/storage/imgs/'.$fileNameToStore;
			 	$path = str_replace("public","storage",$path);
			}else {
				$path = 'storage/news_logo/default.png';
			}
			
			
			$post 			= new News();
			$post->title 	= $Request->input('title');
			$post->content 	= $Request->input('content');
			$post->user_id	= Auth::user()->id;
			$post->file_path= asset($path);
			$post->save();
			
			return redirect('/media-news')->with('success','تم اضافة الخبر بنجاح');
		
		}
	}
	
	public function EditPost(Request $Request){
		
		
		if(!Auth::user()->department_id === Pointer::$Media || !Auth::user()->department_id === Pointer::$Manager)
			return redirect('/home');
		 
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
		 	
		 	return redirect('/media-news')->with('success','تم تعديل الخبر.');
		 }
		 
	}
	
	public function DeleteNews(Request $Request){
		
		
		if(!Auth::user()->department_id === Pointer::$Media || !Auth::user()->department_id === Pointer::$Manager)
			return redirect('/home');
		
		if($Request->isMethod('get')){
			$post = News::find($Request->input('id'));
			if($post->file_path !== asset('storage/news_logo/default.png')){
				unlink(str_replace(asset(''),"",$post->file_path));
			}
			$post->delete();
			return redirect('media-news')->with('success','تم حذف الخبر بنجاح.');
		}
		
	}
	
	public function StoreAbout(Request $Request){
		
		
		if(!Auth::user()->department_id === Pointer::$Media || !Auth::user()->department_id === Pointer::$Manager)
			return redirect('/home');
		
			
		$About = About::find(1);
		$About->post = $Request->input('content');
		$About->save();
		return redirect('/media');
	}
	
	public function Islam(Request $Request){
		
		if(!Auth::user()->department_id === Pointer::$Media || !Auth::user()->department_id === Pointer::$Manager)
			return redirect('/home');
			
		
		if($Request->isMethod('get')){
		
		return view('cpac.media.edit-islam');
		}else if($Request->isMethod('post')){
			
			$is = Islam::find(1);
			$is->content = $Request->input('content');
			$is->save();
			
		}
		return redirect('/media')->with('success','تم الحفظ بنجاح.');
	}
	
	public function StoreDonation(Request $Request){
		
		if(!Auth::user()->department_id === Pointer::$Media || !Auth::user()->department_id === Pointer::$Manager)
			return redirect('/home');
		
			if($Request->isMethod('post')){
			
			$is = Donation::find(1);
			$is->content = $Request->input('content');
			$is->save();
			
		}
		return redirect('/media')->with('success','تم الحفظ بنجاح.');
	}
	
	
	
	
}