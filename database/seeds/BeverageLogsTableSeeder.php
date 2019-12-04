<?php

use Illuminate\Database\Seeder;

class BeverageLogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\BeverageLog::class)->create();
    }
}
