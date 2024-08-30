<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profissional extends Model
{
    use HasFactory;

    protected $table = 'profissionais';

    protected $fillable = ['mei', 'nome', 'email', 'senha'];

    // Relacionamento
    public function servicos()
    {
        return $this->hasMany(Servico::class);
    }
}
