<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Request extends Model
{


	
	// Table Name
	protected $table = 'request';
	// Primary Key
	public $primaryKey = 'id';
	// Timestamps
	public $timestamps = true;
	
	
	
	
	
	public function state(){
		
		return $this->hasOne('App\State');
	}
	
	public function user(){
		
		return $this->hasOne('App\User');
	}


}
