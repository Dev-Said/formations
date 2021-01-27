<?php

namespace Database\Seeders;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReponseUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        DB::table('reponse_user')->insert([
            'reponses_id' => $faker->numberBetween(1, 50),
            'users_id' => $faker->numberBetween(1, 10),
        ]);
        DB::table('reponse_user')->insert([
            'reponses_id' => $faker->numberBetween(1, 50),
            'users_id' => $faker->numberBetween(1, 10),
        ]);
        DB::table('reponse_user')->insert([
            'reponses_id' => $faker->numberBetween(1, 50),
            'users_id' => $faker->numberBetween(1, 10),
        ]);
        DB::table('reponse_user')->insert([
            'reponses_id' => $faker->numberBetween(1, 50),
            'users_id' => $faker->numberBetween(1, 10),
        ]);
        DB::table('reponse_user')->insert([
            'reponses_id' => $faker->numberBetween(1, 50),
            'users_id' => $faker->numberBetween(1, 10),
        ]);
        DB::table('reponse_user')->insert([
            'reponses_id' => $faker->numberBetween(1, 50),
            'users_id' => $faker->numberBetween(1, 10),
        ]);
        DB::table('reponse_user')->insert([
            'reponses_id' => $faker->numberBetween(1, 50),
            'users_id' => $faker->numberBetween(1, 10),
        ]);
        DB::table('reponse_user')->insert([
            'reponses_id' => $faker->numberBetween(1, 50),
            'users_id' => $faker->numberBetween(1, 10),
        ]);
        DB::table('reponse_user')->insert([
            'reponses_id' => $faker->numberBetween(1, 50),
            'users_id' => $faker->numberBetween(1, 10),
        ]);
        DB::table('reponse_user')->insert([
            'reponses_id' => $faker->numberBetween(1, 50),
            'users_id' => $faker->numberBetween(1, 10),
        ]);
    }
}