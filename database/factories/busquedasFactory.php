<?php

namespace Database\Factories;

use App\Models\busquedas;
use Illuminate\Database\Eloquent\Factories\Factory;

class busquedasFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = busquedas::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $nombre = $this->faker->randomElement(['Ticers', 'Lian y asociados', 'Stilo', 'Clinicas Moreno', 'Exppo', 'Plomeros Para Usd.']);
        return [
            'idRubro' => $this->faker->numberBetween($min = 1, $max = 6),
            //'slug'=>Str::slug($nombre,'-'),
            'empresa' => $nombre,
            'titulo' => $this->faker->randomElement(['Se busca Técnico', 'Puesto de Abogado Orientado a Comercio', 'Stilo contrata estilistas', 'Consultorio de pediatra disponible', 'Plomero patentado']),
            'descripcion' => $this->faker->randomElement(['se busca tecnico para mantenimiento de base de datos', 'forma busca abogado orientado a eyes comerciales', 'Se solicitan estilistas (F/M) con experiencia', 'Clinicas Moreno busca pediatras para consultorio de pediatria prenatal', 'Se busca ingeniero experimentado como consultor de grupo', 'Se busca plomero patentado para empresa de plomeria'])
        ];
    }
}
