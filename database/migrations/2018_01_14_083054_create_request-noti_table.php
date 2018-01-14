<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequestNotiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        
    	Schema::create('request-noti', function (Blueprint $table) {
    		
    		$table->increments('id');
    		$table->unsignedInteger('request_id');
    		$table->foreign('request_id')->references('id')->on('request')->onDelete('cascade');
    		$table->boolean('seen');
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
        //
    }
}
