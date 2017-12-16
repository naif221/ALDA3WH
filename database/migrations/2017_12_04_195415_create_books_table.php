<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            
 	
        	$table->increments('id');
        	$table->string('barcode')->nullable();
        	$table->string('name');
        	$table->unsignedInteger('author_id');
        	$table->foreign('author_id')->references('id')->on('author');
        	$table->unsignedTinyInteger('language_id');
        	$table->foreign('language_id')->references('id')->on('language');
        	$table->integer('in_stock');
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
        Schema::dropIfExists('books');
    }
}
