<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLessonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lessons', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('start_time');
            $table->dateTime('end_time');
            $table->string('note');
            $table->timestamps();
            $table->integer('user_id')->unsigned();
            $table->integer('promotion_id')->unsigned();
            $table->integer('room_id')->unsigned();
            $table->integer('skill_id')->unsigned();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('promotion_id')->references('id')->on('promotions');
            $table->foreign('room_id')->references('id')->on('rooms');
            $table->foreign('skill_id')->references('id')->on('skills');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lessons');
    }
}
