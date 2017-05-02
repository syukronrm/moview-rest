<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMoviesStarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies_stars', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('movies_id')->unsigned();
            $table->integer('stars_id')->unsigned();
            $table->foreign('movies_id')->references('id')->on('movies')->onDelete('cascade');;
            $table->foreign('stars_id')->references('id')->on('stars')->onDelete('cascade');;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movies_stars');
    }
}
