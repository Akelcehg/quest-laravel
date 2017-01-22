<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Quest::class, function (Faker\Generator $faker) {

    return [
        'name' => $faker->words(3, true),
        'description' => $faker->text(),
        'people_min' => $faker->numberBetween(2, 3),
        'people_max' => $faker->numberBetween(4, 8),
        'default_price' => $faker->numberBetween(300, 800),
        'title' => $faker->words(6, true),
    ];
});
