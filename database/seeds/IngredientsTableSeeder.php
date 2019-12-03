<?php

use Illuminate\Database\Seeder;

class IngredientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Add Initial Ingredients for predefined beverages
        // Monster Ultra Sunrise Base Serving
        DB::table('ingredients')->insert([
            'name' => 'Monster Ultra Sunrise',
            'caffeine_amount' => 75,
        ]);
        // Black Coffee Base Serving
        DB::table('ingredients')->insert([
            'name' => 'Black Coffee',
            'caffeine_amount' => 85,
        ]);
        // Americano Base Serving
        DB::table('ingredients')->insert([
            'name' => 'Americano',
            'caffeine_amount' => 77,
        ]);
        // Sugar free NOS Base Serving
        DB::table('ingredients')->insert([
            'name' => 'Sugar free NOS',
            'caffeine_amount' => 130,
        ]);
        // 5 Hour Energy Base Serving
        DB::table('ingredients')->insert([
            'name' => '5 Hour Energy',
            'caffeine_amount' => 200,
        ]);
    }
}
