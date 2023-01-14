<?php

namespace App\Service\Main;

use Illuminate\Support\Facades\Storage;

class MovieService
{
    public function publish($movie){

        if (!$movie->published){
            $newStatus=$movie['published'] = 1;
        }else{
            $newStatus = $movie['published'] = 0;
        }
        $movie->update([
            'publish' => $newStatus
        ]);
    }

    public function store($data,$movie){

        if(isset($data['poster_img'])){
            $data['poster_img'] = Storage::disk('public')->put('/image/movie',  $data['poster_img']);
        }else{
            $data['poster_img'] = '/image/standard/140x240.png';/* Правильно сделать то что представленно ниже,
         однако у меня там баг небольшой $data['poster_img'] = Storage::url('/image/standard/140x240.png');*/
        }

        $movie->create($data);
    }
}