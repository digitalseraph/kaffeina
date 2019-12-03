<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(App\Models\BeverageLog::class, function (Faker $faker) {
    $beverageLog =  [
        'user_id' => factory(App\Models\User::class),
        'beverage_id' => factory(App\Models\Beverage::class),
        'consumed_at' => $faker->dateTimeBetween(
            $startDate = '-2 hours',
            $endDate = 'now',
            $timezone = null
        )
    ];

    return $beverageLog;
});
