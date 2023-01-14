<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('genre_movies', function (Blueprint $table) {
            $table->id(); // у жанра может быть  много фильмов, и один фильм имеет много жанров many to many
            $table->unsignedBigInteger('genre_id');
            $table->unsignedBigInteger('movie_id');
            $table->timestamps();
            $table->softDeletes();


            //genre
            $table->index('genre_id','genre_movies_genre_idx');
            $table->foreign('genre_id','genre_movies_genre_fk')->on('genres')->references('id');

            //movie
            $table->index('movie_id','genre_movie_idx');
            $table->foreign('movie_id','genre_movie_movie_fk')->on('movies')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('genre_movies');
    }
};
