<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class usersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 1000000; $i++) {
            DB::table('users')->insert([
                'user_name' => Str::random(50),
                'type_id' => random_int(1, 3),
                'group_id' => random_int(1, 3),
            ]);
        }
    }
}
