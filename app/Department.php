<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    //
    
	
	// Table Name
	protected $table = 'department';
	// Primary Key
	public $primaryKey = 'id';
	// Timestamps
	public $timestamps = false;
	
	
	
	
	
	public function user(){
		
		return $this->hasMany('App\User');
	}
	
	public function request(){
		
		return $this->hasManyThrough('App\Request_' , 'App\User' , 'department_id', 'user_id', 'id' , 'id');
	}
	
	
}
