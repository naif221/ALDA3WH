<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Request_;
use App\User;

class Home extends Controller
{
    //
    
	public function index()
	{
		
		$requests = Request_::all();
		
		//return $requests->load('user')->load('state');
		//return $requests;
		return view('cpac.requests')->with('requests', $requests);
	}
}
