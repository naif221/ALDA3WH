<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class news extends Model
{
   	protected $table = 'news';
	// Primary Key
	public $primaryKey = 'id';
	// Timestamps
	public $timestamps = true;
}
