<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //array de dados
        $clientes = [
            'cliente' =>[
                'id'        => '01',
                'nome'      => 'Fulano de Tal',
                'email'     => 'fulano2@gmail.com',
                'cpf'       => '000.000.000-00',
                'telefone1' => '0000-0000',
                'telefone2' => '0000-0000',
                'celular'   => '00000-0000',
                'cep'       => '00000-000',
                'rua'       => 'Rua Sem Numero',
                'numero'    => '00',
                'bairro'    => 'Barra Da Tijuca',
                'cidade'    => 'Rio de Janeiro',
                'estado'    => 'RJ',
                'created'   => '2016-05-15'
            ],
        ];

        return view('clientes.index', compact('clientes'));
    }
    
    public function listar(){
    	return view('clientes.listar');
    }

    
}
