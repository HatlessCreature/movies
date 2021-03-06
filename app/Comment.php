<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['content'];

    public function movie()
    {
        return $this->belongsTo(Movie::class);
    }
}
