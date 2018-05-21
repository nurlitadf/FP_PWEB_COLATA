<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTodolistTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('todolist', function(Blueprint $table){
            $table->increments('id');
            $table->string('title');
            $table->datetime('deadline');
            $table->unsignedInteger('board_id');
            $table->foreign('board_id')->references('id')->on('board');
            $table->text('keterangan');
            $table->string('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('todolist');
    }
}
