<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    protected $fillable = ['name', 'surname', 'image', 'user_id'];

    public function user()
    {
        return $this->belongsTo(\App\User::class);
    }

    public function songs()
    {
        return $this->hasMany(\App\Song::class);
    }

    public function albums()
    {
        return $this->hasMany(\App\Album::class);
    }
}
