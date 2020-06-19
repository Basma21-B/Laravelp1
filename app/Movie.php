<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
     protected $fillable = [
        'movie_name', '	movie_year', 'movie_type','	movie_summary','movie_picture'
    ];

}
