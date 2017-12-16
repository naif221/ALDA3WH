<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class news extends Model
{
   	protected $table = 'news';
	// Primary Key
	protected $primaryKey = 'id';
	protected $fillable = array('title','content');
	// Timestamps
	public $timestamps = true;
}
