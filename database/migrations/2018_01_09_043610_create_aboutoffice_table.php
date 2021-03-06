<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\About;

class CreateAboutofficeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aboutoffice', function (Blueprint $table) {
            $table->increments('id');
			$table->text('post')->nullable;
        });
    
        $A 		 = new About();
        $A->post = '';
        $A->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aboutoffice');
    }
}
