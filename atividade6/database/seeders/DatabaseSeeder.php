<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Profissional;
use App\Models\Servico;
use App\Models\Profissao;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Profissao::factory(10)->create();
        Profissional::factory(10)->create();
        Servico::factory(10)->create();
    }
}
