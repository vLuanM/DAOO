<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servico extends Model
{
    use HasFactory;

    protected $table = 'servicos';

    protected $fillable = [
        'descricao',
        'preco',
        'profissao_id',
    ];

    public function profissao()
    {
        return $this->belongsTo(Profissao::class);
    }
}
