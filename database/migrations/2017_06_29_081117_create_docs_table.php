<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('docs', function (Blueprint $table) {
        $table->increments('id');
        $table->string('published_date');
        $table->string('category');
        $table->string('from');
        $table->string('type');
        $table->string('url');
        $table->string('recommend');
        $table->string('hot');
        $table->string('display');
        $table->string('view');
        $table->string('collection');
        $table->string('like');
        $table->string('author');
        $table->string('tag');
        $table->string('keyword');
        $table->string('abstract');
        $table->string('preview_img');
        $table->string('content');

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
      Schema::drop('docs');
    }
}
