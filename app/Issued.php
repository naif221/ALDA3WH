<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Issued extends Model
{


	
	// Table Name
	protected $table = 'issued';
	// Primary Key
	public $primaryKey = 'id';
	// Timestamps
	public $timestamps = true;
	
	
	public function user(){
		
		return $this->hasOne('App\User');
	}


}
