<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {

        	$table->increments('id');
            $table->string('name');
            $table->string('phone')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->unsignedInteger('department_id');
        	$table->foreign('department_id')->references('id')->on('department');
            $table->rememberToken();
            $table->timestamps();
        });
        	$this->initManager();
    }

    private function initManager(){
    	
    	$user 				=  new User();
    	$user->name 		= 'Admin';
    	$user->phone 		= '0534567890';
    	$user->email 		= 'Admin@Admin.com';
    	$user->department_id= 5;
    	$user->password		= bcrypt('123456');
    	$user->save();
    	
    }
    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
