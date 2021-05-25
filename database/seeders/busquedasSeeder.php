<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class busquedasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\busquedas::factory(70)->create();
    }
}
