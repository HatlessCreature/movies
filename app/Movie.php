<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = ['title', 'genre', 'director', 'year_of_release', 'storyline'];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
