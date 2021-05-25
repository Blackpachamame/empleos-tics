<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class rubrosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\rubros::factory(25)->create();
    }
}
