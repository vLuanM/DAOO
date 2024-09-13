<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profissao extends Model
{
    use HasFactory;

    protected $table = 'profissoes';

    protected $fillable = [
        'servico',
        'profissional_id',
    ];

    public function profissional()
    {
        return $this->belongsTo(Profissional::class);
    }

    public function servicos()
    {
        return $this->hasMany(Servico::class);
    }
}
