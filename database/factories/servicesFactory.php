<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\services;
use Faker\Generator as Faker;

$factory->define(services::class, function (Faker $faker) {

    return [
        'name' => $faker->word,
        'descption' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
