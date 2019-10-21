<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Advert::class, function (Faker $faker) {
    return [
        //
        'title' => $faker->name,
        'desc' => $faker->realText()
    ];
});
