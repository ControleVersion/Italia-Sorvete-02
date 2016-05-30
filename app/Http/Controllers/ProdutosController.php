<?php

namespace App\Http\Controllers;

use App\Produto;
use App\Categoria;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProdutosController extends Controller
{
    protected $produto;
    //CONSTRUTOR
    public function __construct(Produto $produto)
    {
        $this->produto = $produto;
    }

    public function index(){
        $produtos = $this->produto->join('categorias as c','produtos.categoria_id','=','c.id_categoria')->orderBy('produtos.id', 'DESC')->paginate(25);


        return view('produtos.index', compact('produtos'));
    }

    public function create(){
        //LISTANDO O COMBO DO MODEL Categorias
        $categorias= Categoria::lists('nome', 'id');
        //dd($categorias);

        return view('produtos.create', compact('categorias'));
    }

    public function store(Request $request){
        /* depurando os dados enviados

        dd($request->all()); */
        
        $produto = $this->produto->create($request->all());
        //apos isso sincroniza os dados relacionados
        //$post->tags()->sync($this->getTagsIds($request->tags));


        //redirecionar
        return redirect()->route('produtos.index')->with('status', 'Cadastrado Novo Protudo com sucesso!');
    }
}
