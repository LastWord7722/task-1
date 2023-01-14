<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GenreMovie extends Model
{
    use HasFactory;
    protected $table = 'genre_movies';
    protected $fillable = [
        'genre_id',
        'movie_id',
        ];

        public function getGenre(){
            return $this->belongsTo(Genre::class, 'genre_movies','movie_id','genre_id');
        }
        public function movies(){
            return $this->belongsToMany(Movie::class, 'genre_movies','movie_id','genre_id');
        }



}
