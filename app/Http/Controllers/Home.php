<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Request_;

class Home extends Controller
{
    //
    
	public function index()
	{
		$requests = Request_::all();
		return view('cpac.requests')->with('requests', $requests);
	}
}
