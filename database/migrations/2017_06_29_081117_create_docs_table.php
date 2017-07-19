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
        $table->string('title');
        $table->integer('publisher_id');
        $table->string('published_date');
        $table->string('category');
        $table->string('from');
        $table->string('type');
        $table->string('tag');
        $table->string('url');
        $table->string('recommend')->default(0);
        $table->string('hot')->default(0);
        $table->string('status');
        $table->string('view')->default(0);
        $table->string('collection')->default(0);
        $table->string('like')->default(0);
        $table->string('author');
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
