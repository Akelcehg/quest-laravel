<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Message::class, function (Faker\Generator $faker) {

    return [
        'name' => $faker->words(2, true),
        'email' => $faker->email,
        'phone' => $faker->phoneNumber,
        'subject' => $faker->words(3, true),
        'text' => $faker->text()
    ];
});
