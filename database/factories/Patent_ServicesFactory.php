<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Patent_Services;
use Faker\Generator as Faker;

$factory->define(Patent_Services::class, function (Faker $faker) {

    return [
        'name' => $faker->word,
        'description' => $faker->text,
        'image_url' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
