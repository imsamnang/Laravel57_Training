<?php

namespace App\Model\Backend;

use App\Model\Backend\Post;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function posts()
    {
        return $this->belongsToMany(Post::class)->withTimestamps();
    }
}
