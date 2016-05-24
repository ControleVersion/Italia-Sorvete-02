<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    /*
     * CASO NAO FOR ESPECIFICADO TODOS OS CAMPOS DA TABELA NESTA RELACAO, NAO SERA INSERIDO NA TABELA
     * */
    protected $fillable = [
      'codigo_cliente',
      'nome',
      'email',
      'cpf',
      'telefone1',
      'telefone2',
      'celular',
      'cep',
      'rua',
      'numero',
      'bairro',
      'cidade',
      'estado'
    ];
}
