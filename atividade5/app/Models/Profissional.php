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

    //senha oculta
    protected $hidden = [
        'senha',
    ];

    // Fsenha encriptografada
    public function setSenhaAttribute($value)
    {
        $this->attributes['senha'] = bcrypt($value);
    }
}
