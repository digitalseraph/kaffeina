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

        factory(App\Models\Beverage::class, 10)->create();
    }
}
