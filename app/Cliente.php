<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'clientes';
    protected $fillable = ['nome', 'dt_nascimento','cpf', 'estado', 'cidade', 'endereco' ];
}
