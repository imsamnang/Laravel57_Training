<?php

namespace App\Model\Backend;

use App\Model\Backend\Category;
use App\Model\Backend\Tag;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  public function user()
  {
    return $this->belongsTo(User::class);
  }

  public function categories()
  {
    return $this->belongsToMany(Category::class)->withTimestamps();
  }

  public function tags()
  {
    return $this->belongsToMany(Tag::class)->withTimestamps();
  }

  public function scopeApproved($query)
  {
    return $query->where('is_approved',1);
  }

  public function scopePublished($query)
  {
    return $query->where('is_active',1);
  }

  // public function favorite_to_users()
  // {
  //   return $this->belongsToMany(User::class)->withTimestamps(); 
  // }

  // public function comments()
  // {
  //   return $this->hasMany(Comment::class);
  // }


}
