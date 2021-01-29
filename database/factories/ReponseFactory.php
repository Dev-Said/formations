<?php

namespace Database\Factories;

use App\Models\Reponse;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReponseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Reponse::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'type' => $this->faker->randomElement($array = array ('radio', 'checkbox')) ,
            'text' => $this->faker->sentence(3, true),
            'is_correct' => $this->faker->numberBetween(0, 1),
            'questions_id' => $this->faker->numberBetween(1, 20),
        ];
    }
}
