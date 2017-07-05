<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('menu', function (Blueprint $table) {
        $table->increments('id');
        $table->string('name');
        $table->integer('order');
        $table->string('url');
        $table->string('target');
        $table->string('parent');
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
      Schema::drop('menu');
    }
}
