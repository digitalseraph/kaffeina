<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Ingredient;
use Faker\Generator as Faker;

$factory->define(Ingredient::class, function (Faker $faker) {
    return [
        //
    ];
});


$factory->define(User::class, function (Faker $faker) {
    $ingredient = [
        'name' => $faker->words(
            $nb = $faker->numberBetween(1,3),
            $asText = true
        ),
        'caffeine_amount' => $faker->numberBetween(200, 500),
    ];

    return $ingredient;
});
