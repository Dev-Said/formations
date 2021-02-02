<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Reponse;
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
        User::factory()
            ->has(Reponse::factory()->count(3), 'reponses')
            ->times(5)
            ->create();
    }
}
