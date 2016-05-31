@extends('app')

@section('content')
    <style>
        body{ background: #ebebeb; }
    </style>


    @if (session('status'))
        <div class="alert alert-success" data-alert='alert'>
            {{ session('status') }}
        </div>
    @endif

    <div class="span6">
        <!-- block -->
        <div class="block">
            <div class="block-content collapse in">
                <div class="muted pull-left"><h3>Lista Geral de Produtos</h3> <button onclick="javascript:window.open('{{asset('/produtos/create')}}', '_self')" class="btn btn-success">Adicionar Novo</button></div>

                </div>
            </div>
            <div class="block-content collapse in">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Categoria</th>
                        <th>Preço</th>
                        <th>Ação</th>

                    </tr>
                    </thead>
                    <tbody>

                    @foreach($produtos as $produto)
                        <tr>
                            <td>{{$produto->id}}</td>
                            <td>{{ $produto->nome_produto }} </td>
                            <td>{{$produto->nome}}</td>
                            <td>R$ {{$produto->preco}}</td>
                            <td>
                                <a class="btn btn-info btn-mini" href='{{ asset("/admin/posts/edit/$produto->id")}}'>
                                    <span class="icon-edit"></span> Editar

                                </a>
                                <a class="btn btn-danger btn-mini" href='{{ asset("admin/posts/destroy/$produto->id")}}'>
                                    <span class="icon-trash"></span> Apagar
                                </a>

                            </td>

                        </tr>
                    @endforeach

                    </tbody>
                </table>
                <div class="pagination">
                    {!! $produtos->render() !!}
                </div>
                <hr />
                <div class="pull-right"> Total de Produtos Cadastrados: <span class="badge badge-info">{{$produtos->total()}}</span>

            </div>
        </div>
        <!-- /block -->
    </div>


@endsection