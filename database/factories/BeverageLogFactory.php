<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Models\BeverageLog;

$factory->define(BeverageLog::class, function (Faker $faker) {
    return [
        'user_id' => factory(App\Models\User::class),
        'beverage_id' => factory(App\Models\Beverage::class),
        'consumed_at' => $faker->dateTimeBetween(
            $startDate = '-2 hours',
            $endDate = '-5 minutes',
            $timezone = null
        )
    ];
});
