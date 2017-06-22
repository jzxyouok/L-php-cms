<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUploadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('uploads', function (Blueprint $table) {
        $table->increments('id');
        $table->string('admin_user');
        $table->string('filename_original');
        $table->string('filename_now');
        $table->string('url');
        $table->string('type_real');
        $table->string('size');
        $table->string('upload_time');
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
      Schema::drop('uploads');
    }
}
