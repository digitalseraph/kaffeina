<?php

use Illuminate\Database\Seeder;

use App\Models\Beverage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->predefinedBeverages();
        $this->call(UsersTableSeeder::class);
        $this->call(BeveragesTableSeeder::class);
        $this->call(BeverageLogsTableSeeder::class);
    }

    /**
     * predefinedBeverages
     *
     * Create some predefined beverages for the application
     *
     * @return void
     */
    public function predefinedBeverages() {
        // Add pre-defined Beverages
        // Monster Ultra Sunrise Base Serving
        factory(Beverage::class)->create([
            'name' => 'Monster Ultra Sunrise',
            'description' => 'A refreshing orange beverage that has 75mg of caffeine per serving. Every can has two servings.',
            'caffeine_amount' => 75,
            'servings' => 2
        ]);

        // Black Coffee Base Serving
        factory(Beverage::class)->create([
            'name' => 'Black Coffee',
            'description' => 'The classic, the average 8oz. serving of black coffee has 95mg of caffeine.',
            'caffeine_amount' => 85,
            'servings' => 2
        ]);
        // Americano Base Serving
        factory(Beverage::class)->create([
            'name' => 'Americano',
            'description' => 'Sometimes you need to water it down a bit... and in comes the americano with an average of 77mg. of caffeine per serving',
            'caffeine_amount' => 77,
            'servings' => 2
        ]);
        // Sugar free NOS Base Serving
        factory(Beverage::class)->create([
            'name' => 'Sugar free NOS',
            'description' => 'Another orange delight without the sugar. It has 130 mg. per serving and each can has two servings.',
            'caffeine_amount' => 130,
            'servings' => 2
        ]);
        // 5 Hour Energy Base Serving
        factory(Beverage::class)->create([
            'name' => '5 Hour Energy',
            'description' => 'An amazing shot of get up and go! Each 2 fl. oz. container has 200mg of caffeine to get you going.',
            'caffeine_amount' => 200,
            'servings' => 2
        ]);
    }
}
