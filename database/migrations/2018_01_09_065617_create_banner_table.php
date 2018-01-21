<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Banner;

class CreateBannerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banner', function (Blueprint $table) {
            $table->increments('id');
            $table->text('img_path');
            $table->text('img_path2');
            $table->text('img_path3');
        });
        
		$B = new Banner();
		$B->img_path = asset('storage/news_logo/default.png');
		$B->img_path2 = asset('storage/news_logo/default.png');
		$B->img_path3 = asset('storage/news_logo/default.png');
		$B->save();
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('banner');
    }
}
