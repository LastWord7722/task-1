<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\GenreMovieResource;
use App\Http\Resources\GenreResource;
use App\Models\Genre;
use App\Models\GenreMovie;
use Illuminate\Http\Request;

class ApiGenreComtroller extends Controller
{

    public function index()// все жанры
    {
        return GenreResource::collection(GenreMovie::with('movies')->get());
    }

    public function getGenreMovie($id) // фильмы по жанрам
    {
        return new GenreResource (GenreMovie::with('movies')->findOrFail($id));
    }
    }
// Как-то не получилось у меня релизовать вложенность,
