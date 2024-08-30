<?php

namespace Database\Factories;

use App\Models\Servico;
use Illuminate\Database\Eloquent\Factories\Factory;

class ServicoFactory extends Factory
{
    protected $model = Servico::class;

    public function definition()
    {
        return [
            'descricao' => $this->faker->sentence,
            'preco' => $this->faker->randomFloat(2, 50, 1000),
            'profissional_id' => \App\Models\Profissional::factory(), // Relaciona com um Profissional
        ];
    }
}
