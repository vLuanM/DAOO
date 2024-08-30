<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profissao extends Model
{
    use HasFactory;

    // Define a tabela associada a este modelo (opcional, caso o nome não siga a convenção de pluralização)
    protected $table = 'profissoes';

    // Define os campos que podem ser preenchidos em massa
    protected $fillable = [
        'servico',
    ];
}
