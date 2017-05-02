<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMoviesReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies_reviews', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('movies_id')->unsigned();
            $table->integer('reviews_id')->unsigned();
            $table->foreign('movies_id')->references('id')->on('movies')->onDelete('cascade');;
            $table->foreign('reviews_id')->references('id')->on('reviews')->onDelete('cascade');;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movies_reviews');
    }
}
