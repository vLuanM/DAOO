<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Profissional;
use App\Models\Profissao;
use App\Models\Servico;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Profissional::factory(10)->hasProfissoes(3)->create();

        $this->call([
            ServicoSeeder::class
        ]);
    }
}
