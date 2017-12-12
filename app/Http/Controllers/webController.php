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

    public function employees() {
        
             return view('cpac.employees');
                
            }
    public function newemployees() {
                
            return view('cpac.new-employees');
                        
            }
                    
    public function editemployee() {
                
            return view('cpac.edit-employee');
                        
            }
    public function detailsrequest() {
                        
            return view('cpac.details-request');
                                
            }
    public function newsrequest() {
                        
            return view('cpac.new-request');
                                
            }

    public function department() {
                
            return view('cpac.department');
                        
            }
    public function newdepartment() {
                
            return view('cpac.new-department');
                        
            }
    public function editdepartment() {
                
            return view('cpac.edit-department');
                        
            }
}

