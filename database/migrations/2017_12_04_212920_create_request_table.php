<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request', function (Blueprint $table) {

        	
        	$table->increments('id');
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedTinyInteger('state_id');
            $table->foreign('state_id')->references('id')->on('state');
            $table->text('title');
            $table->longText('content');
            $table->double('price')->nullable();
            $table->timestamps();
        });
   
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    
    
    public function down()
    {
        Schema::dropIfExists('request');
    }
}
