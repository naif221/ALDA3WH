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
        
    	Schema::create('requestNoti', function (Blueprint $table) {
    		
    		$table->increments('id');
    		$table->unsignedInteger('request_id');
    		$table->foreign('request_id')->references('id')->on('request');
    		$table->boolean('seen');
    		$table->unsignedInteger('department_id');
    		$table->foreign('department_id')->references('id')->on('department')->onDelete('cascade');
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
        
    	Schema::table('requestNoti', function(Blueprint $table){
    		
    		$table->dropForeign('requestnoti_request_id_foreign');
     		$table->dropColumn('request_id');
     		$table->dropForeign('requestnoti_department_id_foreign');
     		$table->dropColumn('department_id');
     		$table->drop();
    		
    	});
    		
    }
}
