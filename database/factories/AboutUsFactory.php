<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\AboutUs;
use Faker\Generator as Faker;

$factory->define(AboutUs::class, function (Faker $faker) {

    return [
        'name' => $faker->word,
        'description' => $faker->text,
        'image_url' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
