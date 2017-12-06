<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
	
	// Table Name
	protected $table = 'state';
	// Primary Key
	public $primaryKey = 'id';
	// Timestamps
	public $timestamps = false;
	
	
	public function requsest(){
		
		return $this->hasMany('App\Request_');
	}
	
}
