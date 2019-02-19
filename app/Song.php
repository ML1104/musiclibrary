<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    protected $fillable = ['title', 'artist_id', 'album_id', 'user_id'];

    public function user()
    {
        return $this->belongsTo(\App\User::class);
    }

    public function albums()
    {
        return $this->belongsTo(\App\Album::class);
    }

    public function artists()
    {
        return $this->belongsTo(\App\Artist::class);
    }
}
