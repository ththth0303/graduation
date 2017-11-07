<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Task extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('department');
            $table->string('description');
            $table->string('messages');
            $table->string('priority');
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->integer('user_id')->unsigned();
            $table->integer('status');
            $table->integer('level');
            $table->integer('process');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
