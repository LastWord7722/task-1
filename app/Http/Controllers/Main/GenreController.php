<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Http\Requests\Genre\StoreGenreRequest;
use App\Http\Requests\Genre\UpdateGenreRequest;
use App\Models\Genre;

use function redirect;
use function view;

class GenreController extends Controller
{
    public function index(){

        $genres = Genre::get();

        return view('main.genre.index', compact('genres'));
    }

    public function create(){

        return view('main.genre.create');
    }

    public function store(StoreGenreRequest $request, Genre $genre){

        $data = $request->validated() ;
        $genre->create($data);

        return redirect()->route('main.genre.index');
    }

    public function show(Genre $genre){

        return view('main.genre.show', compact('genre'));
    }

    public function edit(Genre $genre){

        return view('main.genre.edit', compact('genre'));
    }

    public function update(UpdateGenreRequest $request,Genre $genre){

        $data = $request->validated();

        $genre->update($data);
        return redirect()->back();
    }

    public function destroy(genre $genre){

        $genre->delete();
        return redirect()->route('main.genre.index');
    }
}
