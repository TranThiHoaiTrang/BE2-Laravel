<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DiariesContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            DB::table('diaries_content')->insert([
                'diarycontent_id' => random_int(1,2),
                'diarycontent_weeksday' => Str::random(55),
                'diarycontent_work' => Str::random(55),
                'diarycontent_content' => Str::random(55),
                'diarycontent_note' => Str::random(55),
                'diarycontent_teacher_comment' => Str::random(55),
                'diarycontent_traines_comment' => Str::random(55),
                'week_id' => random_int(1,3),
            ]);
        }
    }
}
