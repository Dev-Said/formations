<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questions')->insert([
            'question' => 'Combien font 1 + 1 ?',
            'num' => 1,
            'quiz_id' => 1,
        ]);
        DB::table('questions')->insert([
            'question' => 'Combien font 2 + 2 ?',
            'num' => 2,
            'quiz_id' => 2,
        ]);
        DB::table('questions')->insert([
            'question' => 'Combien font 3 + 3 ?',
            'num' => 3,
            'quiz_id' => 3,
        ]);
        DB::table('questions')->insert([
            'question' => 'Combien font 4 + 4 ?',
            'num' => 4,
            'quiz_id' => 4,
        ]);
        DB::table('questions')->insert([
            'question' => 'Combien font 5 + 5 ?',
            'num' => 5,
            'quiz_id' => 5,
        ]);
        DB::table('questions')->insert([
            'question' => 'Quels chiffres sont plus petits que 10 ?',
            'num' => 6,
            'quiz_id' => 1,
        ]);
        DB::table('questions')->insert([
            'question' => 'Quels chiffres sont plus petits que 8 ?',
            'num' => 7,
            'quiz_id' => 2,
        ]);
        DB::table('questions')->insert([
            'question' => 'Quels chiffres sont plus petits que 5 ?',
            'num' => 8,
            'quiz_id' => 3,
        ]);
        DB::table('questions')->insert([
            'question' => 'Quels chiffres sont plus grandq que 20 ?',
            'num' => 9,
            'quiz_id' => 4,
        ]);
        DB::table('questions')->insert([
            'question' => 'Quels chiffres sont plus grandq que 100 ?',
            'num' => 10,
            'quiz_id' => 5,
        ]);
    }
}
