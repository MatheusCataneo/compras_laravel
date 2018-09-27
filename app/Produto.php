<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = ['descricao','quantidade','preco'];
    protected $guarded = ['id','created_at','update_at'];
    protected $table = 'produto';
}
