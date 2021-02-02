<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuizUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('quiz_user')->insert([
            'quiz_id' => '1',
            'user_id' => '1',
        ]);
        DB::table('quiz_user')->insert([
            'quiz_id' => '1',
            'user_id' => '2',
        ]);
        DB::table('quiz_user')->insert([
            'quiz_id' => '1',
            'user_id' => '3',
        ]);
        DB::table('quiz_user')->insert([
            'quiz_id' => '2',
            'user_id' => '1',
        ]);
        DB::table('quiz_user')->insert([
            'quiz_id' => '2',
            'user_id' => '2',
        ]);
        DB::table('quiz_user')->insert([
            'quiz_id' => '3',
            'user_id' => '2',
        ]);
        DB::table('quiz_user')->insert([
            'quiz_id' => '3',
            'user_id' => '4',
        ]);
        DB::table('quiz_user')->insert([
            'quiz_id' => '4',
            'user_id' => '1',
        ]);
        DB::table('quiz_user')->insert([
            'quiz_id' => '4',
            'user_id' => '3',
        ]);
        DB::table('quiz_user')->insert([
            'quiz_id' => '5',
            'user_id' => '2',
        ]);
        DB::table('quiz_user')->insert([
            'quiz_id' => '5',
            'user_id' => '3',
        ]);
        DB::table('quiz_user')->insert([
            'quiz_id' => '6',
            'user_id' => '4',
        ]);
        DB::table('quiz_user')->insert([
            'quiz_id' => '6',
            'user_id' => '5',
        ]);
        DB::table('quiz_user')->insert([
            'quiz_id' => '6',
            'user_id' => '1',
        ]);
        DB::table('quiz_user')->insert([
            'quiz_id' => '7',
            'user_id' => '3',
        ]);
        DB::table('quiz_user')->insert([
            'quiz_id' => '7',
            'user_id' => '4',
        ]);
        DB::table('quiz_user')->insert([
            'quiz_id' => '8',
            'user_id' => '2',
        ]);
        DB::table('quiz_user')->insert([
            'quiz_id' => '9',
            'user_id' => '5',
        ]);

    }
}
