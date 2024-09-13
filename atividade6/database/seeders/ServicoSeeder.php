<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Servico;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServicoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now=Carbon::now()->toDateTimeString();

        Servico::insert([
            [
                'profissao_id' => 3,
                'preco' => '150',
                'descricao' => 'Pintura de parede'
            ],
            [
                'profissao_id' => 3,
                'preco' => '200',
                'descricao' => 'Instalação de pisos'
            ],
            [
                'profissao_id' => 4,
                'preco' => '300',
                'descricao' => 'Construção de muros'
            ],
            [
                'profissao_id' => 4,
                'preco' => '250',
                'descricao' => 'Instalação de telhados'
            ],
            [
                'profissao_id' => 5,
                'preco' => '500',
                'descricao' => 'Serviços elétricos'
            ],
            [
                'profissao_id' => 5,
                'preco' => '400',
                'descricao' => 'Manutenção hidráulica'
            ],
        ]);
    }
}
