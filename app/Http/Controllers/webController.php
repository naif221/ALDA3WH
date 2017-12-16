<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Books;

class webController extends Controller
{
    public function index() 
    {
    	$ns = News::all();
        return view('web.home', ['home' => $ns]);
    }
    public function about() {

    	return view('web.about');
    	
    }
    public function events() {

    	return view('web.events');
    	
    }
    public function library() {

    	return view('web.library');
    	
    }
    public function donate() {

    	return view('web.donate');
    	
    }


    public function ShowBooks(){
    	
    	$Books = Books::all();
    	
    	return view('web.library' , ['Books' => $Books]);
    	
    }
    
}

