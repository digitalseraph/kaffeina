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
        $this->call(UsersTableSeeder::class);
        $this->call(BeveragesTableSeeder::class);
        $this->call(BeverageLogsTableSeeder::class);
    }
}
