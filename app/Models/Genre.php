<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Genre extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
      'title'
    ];

    public function movies(){
        return $this->belongsTo(GenreMovie::class,'genre_movies');
    }
    public function geste (){
        return $this->belongsTo(GenreMovie::class,'genre_movies');
    }
}
