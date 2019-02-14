<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Albums extends Model
{
    protected $fillable = ['title', 'published_at', 'cover_art', 'user_id', 'artist_id'];

    public function user()
    {
        return $this->belongsTo(\App\User::class);
    }

    public function songs()
    {
        return $this->hasMany(\App\Songs::class);
    }

    public function artists()
    {
        return $this->belongsTo(\App\Artists::class);
    }
}
