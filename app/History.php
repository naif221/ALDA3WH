<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
	//fin_his
	
	
	// Table Name
	protected $table = 'fin_his';
	// Primary Key
	public $primaryKey = 'id';
	// Timestamps
	public $timestamps = true;
	
	public function user(){
		
		return $this->belongsTo('App\User');
	}
	
	public function request(){
		
		return $this->hasOne('App\Request_', 'id','request_id');
	}
}
