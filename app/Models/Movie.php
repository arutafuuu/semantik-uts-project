<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = [
        'title',
        'genre',
        'release_date',
        'age_restriction',
        'rating',
        'duration',
        'trailer',
        'director',
        'description',
        'photo'
    ];
}
