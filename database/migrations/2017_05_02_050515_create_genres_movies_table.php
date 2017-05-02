<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGenresMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('genres_movies', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('movies_id')->unsigned();
            $table->integer('genres_id')->unsigned();
            $table->foreign('movies_id')->references('id')->on('movies')->onDelete('cascade');;
            $table->foreign('genres_id')->references('id')->on('genres')->onDelete('cascade');;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('genres_movies');
    }
}
