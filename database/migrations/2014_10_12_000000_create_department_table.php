<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDepartmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('department', function (Blueprint $table) {

        	$table->increments('id');
            $table->string('department_name');
            $table->text('description')->nullable();
        });
        
        	$this->initializeDepartment('الجاليات');
        	$this->initializeDepartment('الصادر');
        	$this->initializeDepartment('المكتبة');
        	$this->initializeDepartment('مجلس الإدارة');
        	$this->initializeDepartment('الإدارة');
        	$this->initializeDepartment('الإعلام');
        	$this->initializeDepartment('الخدمات');
        	
    }
    
    
    private function initializeDepartment($name){
    	
    	DB::table('department')->insert(
    			['department_name' => $name]
    			);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('department');
    }
}
