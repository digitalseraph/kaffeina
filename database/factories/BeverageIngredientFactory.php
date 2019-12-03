<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\BeverageIngredient;
use App\Models\Beverage;
use App\Models\Ingredient;
use Faker\Generator as Faker;

$factory->define(BeverageIngredient::class, function (Faker $faker) {
    $beverageIngredient = [
        'beverage_id' => factory(Beverage::class),
        'ingredient_id' => factory(Ingredient::class),
        'ingredient_amount' => $faker->numberBetween(1, 3)
    ];

    return $beverageIngredient;
});
