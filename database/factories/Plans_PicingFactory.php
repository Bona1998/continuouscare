<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Plans_Picing;
use Faker\Generator as Faker;

$factory->define(Plans_Picing::class, function (Faker $faker) {

    return [
        'offer_type' => $faker->word,
        'annually_pric' => $faker->word,
        'monthly_price' => $faker->word,
        'offer' => $faker->text,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
