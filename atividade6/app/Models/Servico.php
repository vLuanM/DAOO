<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servico extends Model
{
    use HasFactory;

    protected $fillable = ['descricao', 'preco', 'profissional_id'];

    public function profissional()
    {
        return $this->belongsTo(Profissional::class);
    }
}
