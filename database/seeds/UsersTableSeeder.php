<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Add test user from dotenv
        DB::table('users')->insert([
            'name' => env('KAFFEINA_TEST_USER_NAME'),
            'email' => env('KAFFEINA_TEST_USER_EMAIL'),
            'max_caffeine_amount' => env('KAFFEINA_TEST_USER_MAX_CAFFEINE_AMT'),
            'password' => bcrypt(env('KAFFEINA_TEST_USER_PASSWORD'))
        ]);

        factory(App\Models\User::class, 10)->create()->each(function($user) {
            $log = factory(App\Models\BeverageLog::class)->make();

            $user->beverageLogs()->save($log);
        });
    }
}
