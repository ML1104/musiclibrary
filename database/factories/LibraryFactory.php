<?php

use Faker\Generator as Faker;

$factory->define(\App\Library::class, function (Faker $faker) {
    return [
        'song' => 'RandomSong',
        'artist' => $faker->name(null),
        'album' => 'RandomAlbum'

    ];
});
