<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Books;
use App\News;
use App\MuslimsCount;
class WebController extends Controller
{
	
	

    public function index() 
    {
    	$ns = News::latest()->paginate(6);
    	$M = MuslimsCount::find(1);
    	
        return view('web.home', ['home' => $ns, 'Count' => $M]);
    }
    public function About() {

    	return view('web.about');
    	
    }
    public function events() {

    	return view('web.events');
    	
    }
    public function library() {

    	return view('web.library');
    	
    }
    
    
    public function islam() {

    	
    	
    	
    	return view('web.islam');
    	
    }
    
    
    // Extrnal
    public function ShowNewsForPublic(){
    	
    	$Posts = News::latest()->paginate(6);
    	
    	return view('web.news',['news' => $Posts]);
    }
    
    public function ShowPostDetail(Request $Request){
    	
    	$Posts = News::find($Request->input('id'));
    	
    	return view('web.show',['news' => $Posts]);
    }

    public function ShowBooks(){
    	
    	$Books = Books::all();
    	
    	return view('web.library' , ['Books' => $Books]);
    	
    }
    
}

