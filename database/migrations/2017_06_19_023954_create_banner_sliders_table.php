<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBannerSlidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('banner_sliders', function (Blueprint $table) {
        $table->increments('id');
        $table->integer('banner_id');
        $table->string('title');
        $table->string('url');
        $table->string('img_title');
        $table->string('img_alt');
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
      Schema::drop('banner_sliders');
    }
}
