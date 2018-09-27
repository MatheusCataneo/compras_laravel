<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cadastro_cliente extends Model
{
    protected $fillable = [
        'nome', 'email', 'senha',
    ];
}
