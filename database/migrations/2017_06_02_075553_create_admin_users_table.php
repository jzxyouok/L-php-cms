<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminUsersTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('admin_users', function (Blueprint $table) {
      $table->increments('id');
      $table->string('username');
      $table->string('nickname');
      $table->string('avatar');
      $table->string('password');
      $table->integer('status')->default('1')->nullable();
      $table->string('user_group');
      $table->integer('phone')->default('1')->nullable();
      $table->string('email');
      $table->string('remark');
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
    Schema::drop('admin_users');
  }
}
