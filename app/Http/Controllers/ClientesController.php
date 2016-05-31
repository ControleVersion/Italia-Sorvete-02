<?php

namespace App\Http\Controllers;

use App\Cliente;
use Illuminate\Http\Request;
use DB;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;

class ClientesController extends Controller
{
    protected $cliente;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        return view('clientes.index', compact('clientes'));
    }
    
    public function store()
    {
        $clientes = Input::all();
        Cliente::create( $clientes );

        return redirect()->route('clientes.listar')->with('status', 'Cadastrado Novo Cliente com sucesso!');
    }

    public function listar(){
        //resposta de sucesso
        $resp =  [ 'resp' => 'Cadastrado com sucesso!'];

        $querys = DB::table('clientes');
        $query = $querys->orderBy('id', 'desc');

        $clientes = $query->paginate(5);

        return view('clientes.listar', compact('clientes'));
    }

    public function edit($id)
    {
        $clientes = Cliente::all();
        $cliente = $clientes->find($id);

        return view('clientes.edit', compact('cliente'));
    }
    public function update($id, Request $request){
        $clientes = Cliente::all();
        $clientes->find($id)->update($request->all());
        //$cliente = $this->cliente->find($id);

        //apos isso sincroniza os dados relacionados
        //$cliente->tags()->sync($this->getTagsIds($request->tags));

        return redirect()->route('clientes.listar');
    }

    
}
