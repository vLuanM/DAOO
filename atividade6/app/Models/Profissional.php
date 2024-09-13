<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profissional extends Model
{
    use HasFactory;

    protected $table = 'profissionais';

    protected $fillable = [
        'mei',
        'nome',
        'email',
        'senha',
    ];

    public function profissoes()
    {
        return $this->hasMany(Profissao::class);
    }

    public function servicos()
    {
        return $this->hasManyThrough(Servico::class, Profissao::class);
    }
}
