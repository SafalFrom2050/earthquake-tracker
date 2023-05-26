<?php

namespace Database\Seeders;

use App\Constants\Common;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /** create test user */
        User::factory()
            ->create([
                'email' => 'aa@aa.aa', //test user
            ]);

//        /*create general user*/
//        User::factory()
//            ->count(50)
//            ->create();
    }
}
