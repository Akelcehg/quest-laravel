<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\QuestImage::class, function (Faker\Generator $faker) {

    $image = $faker->imageUrl(1920, 1000, 'abstract');
    $image_thumb = str_replace("1920/1000", "1000/500", $image);
    return [
        'image' => $image,
        'thumbnail' => $image_thumb,
        'for_display' => 0,
        'quest_id' => str_random(10),
    ];
});