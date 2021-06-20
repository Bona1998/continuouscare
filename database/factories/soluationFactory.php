<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\soluation;
use Faker\Generator as Faker;

$factory->define(soluation::class, function (Faker $faker) {

    return [
        'soluationName' => $faker->word,
        'soluationDescriotion' => $faker->text,
        'soluationContent' => $faker->text,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
