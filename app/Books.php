<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Books extends Model
{

	
	// Table Name
	protected $table = 'books';
	// Primary Key
	public $primaryKey = 'id';

	
	public function language(){
		
		return $this->hasOne('App\Language');
	}
	
	public function author(){
		return $this->hasOne('App\Author');
	}
	


}
