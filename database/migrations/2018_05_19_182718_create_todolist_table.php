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
        Schema::create('todolists', function(Blueprint $table){
            $table->increments('id');
            $table->string('title');
            $table->datetime('deadline');
            $table->integer('board_id')->unsigned();
            $table->foreign('board_id')->references('id')->on('boards');
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
