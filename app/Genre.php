<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    public function getPost()
    {
        return $this->belongsToMany(Article::class, PostGenre::class, "genre_id", "post_id");
    }
}
