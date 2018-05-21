<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBoardTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('board', function(Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('username');
            $table->foreign('user_id')->references('id')->on('users');
            $table->text('keterangan');
            $table->char('background',7);
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('board');
    }
}
