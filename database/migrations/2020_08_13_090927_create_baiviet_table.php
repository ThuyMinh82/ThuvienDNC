<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBaivietTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('baiviet', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->increments('id');
            $table->string('ten_bv')->unique(); 
            $table->text('mtngan_bv');
            $table->text('noidung_bv');
            $table->string('alias');
            $table->timestamps('');
            $table->integer('status');
            $table->unsignedInteger('cd_id');
            $table->unsignedInteger('user_id');
            $table->foreign('cd_id')->references('id')->on('chudebv');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('anhdaidien');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('baiviet');
    }
}
