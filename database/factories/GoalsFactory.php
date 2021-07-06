<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Goals;
use Faker\Generator as Faker;

$factory->define(Goals::class, function (Faker $faker) {

    return [
        'name' => $faker->word,
        'discription' => $faker->text,
        'image_url' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
