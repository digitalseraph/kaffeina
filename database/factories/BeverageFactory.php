<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Beverage;
use Faker\Generator as Faker;

$factory->define(Beverage::class, function (Faker $faker) {
    return [
        'name' => $faker->words( $nb = 3, $asText = true ),
        'description' => $faker->sentence( $nbWords = 6, $variableNbWords = true ),
        'caffeine_amount' => $faker->numberBetween(200, 500),
        'servings' => $faker->numberBetween(1,2),
    ];
});
