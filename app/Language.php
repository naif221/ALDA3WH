<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    //
    
	
	// Table Name
	protected $table = 'language';
	// Primary Key
	public $primaryKey = 'id';

	
	public function books(){
		
		return $this->hasMany('App\Books');
	}
	
}
