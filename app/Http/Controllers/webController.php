<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class webController extends Controller
{
    public function index() 
    {
    	return view('web.home');
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
}