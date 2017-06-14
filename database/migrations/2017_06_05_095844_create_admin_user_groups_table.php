<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminUserGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('admin_user_groups', function (Blueprint $table) {
        $table->increments('id');
        $table->string('name');
        $table->string('remark');
        $table->integer('group_id')->default('1')->nullable();
        $table->integer('pid')->default('1')->nullable();
        $table->integer('status')->default('1')->nullable();
        $table->json('power');
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
      Schema::drop('admin_user_groups');
    }
}
