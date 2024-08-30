<?php

namespace Database\Factories;

use App\Models\Profissional;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProfissionalFactory extends Factory
{
    protected $model = Profissional::class;

    public function definition()
    {
        return [
            'mei' => $this->faker->unique()->numerify('##.###.###/####-##'), // Gerando MEI
            'nome' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'senha' => bcrypt('senha123'), // Criptografando a senha
        ];
    }
}
