<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('state', function (Blueprint $table) {
        	

        	
            $table->tinyIncrements('id');
            $table->string('title');
        });
        
        	$this->initializeState('تحت الدراسة');
        	$this->initializeState('مقبولة');
        	$this->initializeState('مرفوضة');
        	$this->initializeState('تحت الدراسة من المجلس');
        	$this->initializeState('مقبولة من المجلس');
        	$this->initializeState('مرفوضة من المجلس');
    }

    
    private function initializeState($title){
    	
    	DB::table('state')->insert(
    			['title' => $title]
    			);
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('state');
    }
}
