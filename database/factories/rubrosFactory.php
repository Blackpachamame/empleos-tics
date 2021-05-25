<?php

namespace Database\Factories;

use App\Models\rubros;
use Illuminate\Database\Eloquent\Factories\Factory;

class rubrosFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = rubros::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'descripcion' => $this->faker->randomElement(['Informatica', 'Medicina', 'Abogacia', 'Peluqueria', 'Ingenieria', 'Plomeria'])
        ];
    }
}
