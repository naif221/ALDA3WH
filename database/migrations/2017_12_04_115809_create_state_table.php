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
        	$this->initializeState('تحت الدراسة من مجلس الإدارة');
        	$this->initializeState('مقبولة من مجلس الإدارة');
        	$this->initializeState('مرفوضة من مجلس الإدارة');
        	
        	$this->initializeState('محولة للجاليات');
        	$this->initializeState('محولة للصادر');
        	$this->initializeState('محولة للمكتبة');
        	$this->initializeState('محولة للإعلام');
        	$this->initializeState('محولة للخدمات');
        	
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
