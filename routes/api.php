<?php

use App\Http\Controllers\API\ApiMovieComtroller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\ApiGenreComtroller;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/genre',[ApiGenreComtroller::class, 'index']);
Route::get('/genre/{id}',[ApiGenreComtroller::class, 'getGenreMovie']);

Route::get('/movie',[ApiMovieComtroller::class, 'allMovie']);
Route::get('/movie/{id}',[ApiMovieComtroller::class, 'show']);
