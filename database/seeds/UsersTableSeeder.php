<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (config('kaffeina.dev.create_test_user')) {
            $this->createTestUser();
        }

        if(config('kaffeina.dev.seeds.users') > 0) {
            factory(App\Models\User::class, config('kaffeina.dev.seeds.users'))->create()->each(function($user) {
                $log = factory(App\Models\BeverageLog::class)->make();

                $user->beverageLogs()->save($log);
            });
        }
    }

    public function createTestUser() {
        // Add test user from dotenv
        factory(User::class)->create([
            'name' => config('kaffeina.dev.test_user.name'),
            'email' => config('kaffeina.dev.test_user.email'),
            'max_caffeine_amount' => config('kaffeina.dev.test_user.max_caffeine_amount'),
            'password' => bcrypt(config('kaffeina.dev.test_user.password'))
        ]);
    }
}
