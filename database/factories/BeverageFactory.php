<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Beverage;
use App\Models\Ingredient;
use Faker\Generator as Faker;

$factory->define(App\Models\Beverage::class, function (Faker $faker) {
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
