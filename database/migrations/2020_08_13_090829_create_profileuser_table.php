<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfileuserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profileuser', function (Blueprint $table) {
            $table->engine='InnoDB';          
            $table->increments('id');
            $table->string('name_prouser');
            $table->string('email')->unique();
            $table->string('address');
            $table->string('sdt');
            $table->unsignedInteger('users_id');
            $table->timestamps();
            $table->foreign('users_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profileuser');
    }
}
