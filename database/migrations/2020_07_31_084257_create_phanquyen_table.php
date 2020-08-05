<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhanquyenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phanquyen', function (Blueprint $table) {
            $table->engine='InnoDB';         
            $table->increments('id');
            $table->string('ten_pq');
            $table->unsignedInteger('usergroup_id');
            $table->timestamps();
            $table->foreign('usergroup_id')->references('id')->on('usergroup');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('phanquyen');
    }
}
