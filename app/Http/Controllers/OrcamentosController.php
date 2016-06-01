<?php

namespace App\Http\Controllers;

use App\Orcamento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class OrcamentosController extends Controller
{
    protected $orcamento;
    //CONSTRUTOR
    public function __construct(Orcamento $orcamento)
    {
        $this->orcamento = $orcamento;
    }

    public function index(){
      //$orcamentos = $this->orcamento->joiningTable('produtos','orcamentos.produto_id','=','produtos.id');
        $total = DB::table('orcamentos')
            ->leftJoin('produtos as p', 'p.id', '=', 'orcamentos.produto_id')
            ->leftJoin('clientes as c', 'c.id', '=', 'orcamentos.cliente_id')
            ->select('c.id as cliId', 'p.id as prodId',
                DB::raw('SUM(total) as Totais'))
            ->where('cliente_id','=',1)->first();

        $orcamentos = DB::table('orcamentos')
            ->leftJoin('produtos as p', 'p.id', '=', 'orcamentos.produto_id')
            ->leftJoin('clientes as c', 'c.id', '=', 'orcamentos.cliente_id')
            ->select('p.*')
            ->where('cliente_id','=',1)->get();

        foreach ($orcamentos as $orcamento){
            $objeto[] = array(
                'nome_produto' => htmlentities($orcamento->nome_produto),
                'preco' =>$orcamento->preco,
                'total'=> $total->Totais
            );
        }


        return view('orcamentos.index', compact('objeto'));
    }

}
