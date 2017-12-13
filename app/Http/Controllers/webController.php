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
        
             return view('cpac.employees.employees');
                
            }
    public function newemployees() {
                
            return view('cpac.employees.new-employees');
                        
            }
                    
    public function editemployee() {
                
            return view('cpac.employees.edit-employee');
                        
            }
    public function detailsrequest() {
                        
            return view('cpac.requests.details-request');
                                
            }
    public function newsrequest() {
                        
            return view('cpac.requests.new-request');
                                
            }

    public function department() {
                
            return view('cpac.department.department');
                        
            }
    public function newdepartment() {
                
            return view('cpac.department.new-department');
                        
            }
    public function editdepartment() {
                
            return view('cpac.department.edit-department');
                        
            }
            
    public function books() {
        
            return view('cpac.books.books');
                
    }
    public function newbook() {
        
            return view('cpac.books.new-book');
                
    }
    public function editbook() {
        
            return view('cpac.books.edit-book');
                
    }
    public function bookslanguge() {
        
            return view('cpac.books.languge');
                
    }
    public function booksnewlanguge() {
        
            return view('cpac.books.new-languge');
                
    }
    public function profile() {
        
            return view('cpac.profile');
                
    }
    public function home1() {
        
            return view('cpac.home1');
                
    }
    public function archives() {
        
            return view('cpac.archive.archives');
                
    }
    public function newarchive() {
        
            return view('cpac.archive.new-archive');
                
    }
    public function detailsarchive() {
        
            return view('cpac.archive.details-archive');
                
    }
}

