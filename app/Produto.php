<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $table = 'produtos';
    //REGISTRAR CAMPOS PARA CADASTRO E MANIPULACAO DO OBJETO
    protected $fillable = [
        'categoria_id',
        'nome_produto',
        'preco'
    ];

    public function cliente(){
        return $this->hasMany('App\Cliente');
    }


    public function categoria(){
        return $this->belongsToMany('App\Categoria', 'categoria_id');
    }
}
