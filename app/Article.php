<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public function genre()
    {
        return $this->belongsToMany(Genre::class, PostGenre::class, "post_id", "genre_id");
    }
}
