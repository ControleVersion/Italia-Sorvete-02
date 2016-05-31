<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orcamento extends Model
{
    protected $table = 'orcamentos';
    protected $fillable = [
        'cliente_id',
        'produto_id',
        'total'
    ];

    public function cliente(){
        return $this->hasMany('App\Cliente', 'cliente_id');
    }
    public function produto(){
        return $this->hasMany('App\Produto', 'produto_id');
    }
}
