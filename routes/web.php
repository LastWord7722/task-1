<?php

use App\Http\Controllers\Main\GenreController;
use App\Http\Controllers\Main\Movice\MovieController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//genre
Route::group(['prefix' => 'genre', 'namespace'=>'genre'], function (){


    Route::get('/', [GenreController::class, 'index'])->name('main.genre.index');
    Route::get('/create', [GenreController::class, 'create'])->name('main.genre.create');
    Route::post('/', [GenreController::class, 'store'])->name('main.genre.store');
    Route::get('/{genre}/show',[GenreController::class,'show'])->name('main.genre.show');
    Route::get('/{genre}/edit',[GenreController::class,'edit'])->name('main.genre.edit');
    Route::patch('/{genre}',[GenreController::class,'update'])->name('main.genre.update');
    Route::delete('/{genre}',[GenreController::class,'destroy'])->name('main.genre.destroy');



});


//movie
Route::group(['prefix' => 'movie', 'namespace'=>'movie'], function (){

    Route::get('/publish', [MovieController::class, 'PublishIndex'])->name('main.movie.publishIndex');
    Route::get('/', [MovieController::class, 'index'])->name('main.movie.index');
    Route::get('/create', [MovieController::class, 'create'])->name('main.movie.create');
    Route::post('/', [MovieController::class, 'store'])->name('main.movie.store');
    Route::get('/{movie}/show',[MovieController::class,'show'])->name('main.movie.show');
    Route::get('/{movie}/edit',[MovieController::class,'edit'])->name('main.movie.edit');
    Route::patch('/{movie}',[MovieController::class,'update'])->name('main.movie.update');
    Route::delete('/{movie}',[MovieController::class,'destroy'])->name('main.movie.destroy');
    Route::patch('/{movie}/publish',[MovieController::class, 'publish'])->name('main.movie.publish');
});

