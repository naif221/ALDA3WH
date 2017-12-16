<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
   	protected $table = 'news';
	// Primary Key
	protected $primaryKey = 'id';
	// Timestamps
	public $timestamps = true;
	
	
	public function user(){
		
		return $this->belongsTo('App\User');
	}
	
}
