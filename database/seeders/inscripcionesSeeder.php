<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class inscripcionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\inscripciones::factory(50)->create();
    }
}
