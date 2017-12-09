<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    //
    
	
	
	
	// Table Name
	protected $table = 'author';
	// Primary Key
	public $primaryKey = 'id';
	
	
	
	public function books(){
		
		return $this->hasMany('App\Books');
	}

	
	
}
