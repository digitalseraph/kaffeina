<?php

use Illuminate\Database\Seeder;
use App\Models\Beverage;

class BeveragesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create Pre
        if(config('kaffeina.dev.create_default_beverages')) {
            $this->predefinedBeverages();
        }

        if(config('kaffeina.dev.seeds.beverage') > 0) {
            factory(App\Models\Beverage::class, config('kaffeina.dev.seeds.beverage'))->create();
        }
    }

    /**
     * predefinedBeverages
     *
     * Create some predefined beverages for the application
     *
     * @return void
     */
    public function predefinedBeverages() {
        // Monster Ultra Sunrise
        factory(Beverage::class)->create([
            'name' => 'Monster Ultra Sunrise',
            'description' => 'A refreshing orange beverage that has 75mg of caffeine per serving. Every can has two servings.',
            'caffeine_amount' => 75,
            'servings' => 2
        ]);

        // Black Coffee
        factory(Beverage::class)->create([
            'name' => 'Black Coffee',
            'description' => 'The classic, the average 8oz. serving of black coffee has 95mg of caffeine.',
            'caffeine_amount' => 95,
            'servings' => 1
        ]);

        // Americano
        factory(Beverage::class)->create([
            'name' => 'Americano',
            'description' => 'Sometimes you need to water it down a bit... and in comes the americano with an average of 77mg. of caffeine per serving',
            'caffeine_amount' => 77,
            'servings' => 1
        ]);

        // Sugar free NOS
        factory(Beverage::class)->create([
            'name' => 'Sugar free NOS',
            'description' => 'Another orange delight without the sugar. It has 130 mg. per serving and each can has two servings.',
            'caffeine_amount' => 130,
            'servings' => 2
        ]);

        // 5 Hour Energy
        factory(Beverage::class)->create([
            'name' => '5 Hour Energy',
            'description' => 'An amazing shot of get up and go! Each 2 fl. oz. container has 200mg of caffeine to get you going.',
            'caffeine_amount' => 200,
            'servings' => 1
        ]);
    }
}
