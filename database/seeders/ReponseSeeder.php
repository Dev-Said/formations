<?php

namespace Database\Seeders;

use App\Models\Reponse;
use Illuminate\Database\Seeder;

class ReponseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Reponse::factory()
        ->times(50)
        ->create();
    }
}
