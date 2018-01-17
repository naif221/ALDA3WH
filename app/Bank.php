<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    //
    
	// Table Name
	protected $table = 'finance';
	// Primary Key
	public $primaryKey = 'id';
	// Timestamps
	public $timestamps = false;
	
	
}
