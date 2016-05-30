<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'categorias';
    /*
     * CASO NAO FOR ESPECIFICADO TODOS OS CAMPOS DA TABELA NESTA RELACAO, NAO SERA INSERIDO NA TABELA
     * */
    protected $fillable = [
        'nome'
    ];

    public function produto(){
        return $this->hasMany('App\Produto', 'id');
    }
}
