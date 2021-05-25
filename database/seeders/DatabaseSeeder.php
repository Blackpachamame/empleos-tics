<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(rubrosSeeder::class);
        $this->call(busquedasSeeder::class);
        $this->call(inscripcionesSeeder::class);
    }
}
