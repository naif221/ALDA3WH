<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','department_id','phone',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function department(){
    	
    	return $this->belongsTo('App\department');
    }
    
    public function request(){
    	
    	return $this->hasMany('App\Request_');
    }
    
    public function issued(){
    	
    	return $this->hasMany('App\Issued');
    }
    
    
    public function news(){
    	
    	return $this->hasMany('App\News');
    }
    
    
    public function history(){
    	
    	return $this->hasMany('App\History');
    }
    

}
