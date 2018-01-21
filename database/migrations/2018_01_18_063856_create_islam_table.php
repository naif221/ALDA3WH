<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Islam;

class CreateIslamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('islam', function (Blueprint $table) {
            $table->increments('id');
            $table->text('content');
            
        });

    	$I = new Islam();
    	$I->content = '';
    	$I->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('islam');
    }
}
