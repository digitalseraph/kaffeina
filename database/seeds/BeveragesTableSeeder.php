<?php

use Illuminate\Database\Seeder;

class BeveragesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Add pre-defined Beverages
        // Monster Ultra Sunrise Base Serving
        DB::table('beverages')->insert([
            'name' => 'Monster Ultra Sunrise',
            'description' => 'A refreshing orange beverage that has 75mg of caffeine per serving. Every can has two servings.',
        ]);
        // Black Coffee Base Serving
        DB::table('beverages')->insert([
            'name' => 'Black Coffee',
            'description' => 'The classic, the average 8oz. serving of black coffee has 95mg of caffeine.',
        ]);
        // Americano Base Serving
        DB::table('beverages')->insert([
            'name' => 'Americano',
            'description' => 'Sometimes you need to water it down a bit... and in comes the americano with an average of 77mg. of caffeine per serving',
        ]);
        // Sugar free NOS Base Serving
        DB::table('beverages')->insert([
            'name' => 'Sugar free NOS',
            'description' => 'Another orange delight without the sugar. It has 130 mg. per serving and each can has two servings.',
        ]);
        // 5 Hour Energy Base Serving
        DB::table('beverages')->insert([
            'name' => '5 Hour Energy',
            'description' => 'An amazing shot of get up and go! Each 2 fl. oz. container has 200mg of caffeine to get you going.',
        ]);

        factory(App\Models\Beverage::class)->create();

    }
}
