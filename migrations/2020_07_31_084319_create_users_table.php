<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->engine='InnoDB';        
            $table->increments('id');
            $table->string('username');
            $table->string('password');
            $table->string('status');
            $table->unsignedInteger('usergroup_id');
            $table->unsignedInteger('profileuser_id');
            $table->timestamps();
            $table->foreign('usergroup_id')->references('id')->on('usergroup');
            $table->foreign('profileuser_id')->references('id')->on('profileuser');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
