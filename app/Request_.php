<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Request_ extends Model
{


	
	// Table Name
	protected $table = 'request';
	// Primary Key
	public $primaryKey = 'id';
	// Timestamps
	public $timestamps = true;
	
	
	
	
	
	public function state(){
		
		return $this->hasOne('App\State' , 'id' , 'state_id');
	}
	
	public function user(){
		
		return $this->belongsTo('App\User');
	}


}
