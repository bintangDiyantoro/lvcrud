<?php

use Faker\Generator as Faker;

//define the model class
$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(10),
        'body' => $faker->paragraph(30)
    ];
});
