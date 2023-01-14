<?php

namespace App\Http\Controllers\Main\Movice;

use App\Http\Controllers\Controller;
use App\Http\Requests\Movie\StoreMovieRequest;
use App\Http\Requests\Movie\UpdateMovieRequest;
use App\Models\Genre;
use App\Models\GenreMovie;
use App\Models\Movie;
use App\Service\Main\MovieService;
use Illuminate\Support\Facades\Storage;
use function redirect;
use function view;

class MovieController extends BaseController
{
    public function publish(Movie $movie, MovieService $service){

        $this->service->publish($movie);

        return redirect()->back();
    }
    public function PublishIndex(){

        $movies = Movie::where('published', '=', true)->get();
        return view('main.movie.publishIndex', compact('movies'));
    }

    public function index(){

        $movies = Movie::get();

        return view('main.movie.index', compact('movies'));
    }

    public function create(){

        return view('main.movie.create');
    }

    public function store(StoreMovieRequest $request, Movie $movie ){

        $data = $request->validated();

        $this->service->store($data,$movie);

        return redirect()->route('main.movie.index' );
    }

    public function show(Movie $movie){
        return view('main.movie.show', compact('movie'));
    }

    public function edit(Movie $movie){

        return view('main.movie.edit', compact('movie'));
    }

    public function update(UpdateMovieRequest $request, Movie $movie){
        $data = $request->validated();
        $newImage = $request->Hasfile('poster_img');

        if($newImage){
            $image=$data['poster_img'] = Storage::disk('public')->put('image/movie', $data['poster_img']);
        }else{
            $image = assert('image/standard/140x240.png');
        }

        $movie->update([
            'name'=> $data['name'],
            'poster_img' => $image,
        ]);

        return redirect()->back();
    }

    public function destroy(Movie $movie){

        $movie->delete();
        return redirect()->route('main.movie.index')->with('massage', 'успешно удалили');
    }
}
