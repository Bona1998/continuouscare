<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\about;
use Faker\Generator as Faker;

$factory->define(about::class, function (Faker $faker) {

    return [
        'aboutName' => $faker->word,
        'aboutContent' => $faker->text,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
