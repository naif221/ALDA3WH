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
	public $timestamps = true;
	
	
	
	
	
	public function user(){
		
		return $this->hasMany('App\User');
	}
	
	
}
