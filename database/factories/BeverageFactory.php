<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Beverage;
use Faker\Generator as Faker;

$factory->define(Beverage::class, function (Faker $faker) {
    $beverage = [
        'name' => $faker->words(
            $nb = 3,
            $asText = true
        ),
        'description' => $faker->sentence(
            $nbWords = 6,
            $variableNbWords = true
        )
    ];

    return $beverage;
});
