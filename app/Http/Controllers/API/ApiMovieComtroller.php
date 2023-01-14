<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\GenreMovieResource;
use App\Http\Resources\GenreResource;
use App\Http\Resources\MovieResource;
use App\Models\Genre;
use App\Models\GenreMovie;
use App\Models\Movie;
use Illuminate\Http\Request;

class ApiMovieComtroller extends Controller
{

    public function allMovie()// все фильмы
    {
        return MovieResource::collection(Movie::all());
    }

    public function show($id) // выборка по ид
    {
        return new MovieResource(Movie::findOrFail($id));
    }

}
