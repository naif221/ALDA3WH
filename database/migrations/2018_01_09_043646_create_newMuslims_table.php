<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\MuslimsCount;

class CreateNewMuslimsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('newmuslims', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('count');
            $table->timestamps();
        });
        
        	$this->initRow();
    }

    
    private function initRow(){
    	
    	$M 			= new MuslimsCount;
    	$M->count 	= 0;
    	$M->save();
    	
    }
    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('newMuslims');
    }
}
