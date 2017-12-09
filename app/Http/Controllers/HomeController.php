<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Request_;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	if(Auth::check()){
    		
    		$req = Request_::all();
			return view('cpac.newrequests' , ['requests' => $req]);
    		
    		
    	}else {
    		
    	return 'not in  !';
    		
    	}    
    }
    
    
}
