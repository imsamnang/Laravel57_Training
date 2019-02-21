<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
      'name','username', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function role()
    {
        return $this->belongsTo(Role::class);
    }


    // public function favorite_posts()
    // {
    //     return $this->belongsToMany('App\post')->withTimestamps();
    // }

    // public function comments()
    // {
    //     return $this->hasMany('App\Comment');
    // }

    // public function scopeAuthors($query)
    // {
    //     return $query->where('role_id',2);
    // }    
}
