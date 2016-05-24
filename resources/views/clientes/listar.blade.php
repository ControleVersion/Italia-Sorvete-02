@extends('app')

@section('content')

    <!--
    <div class='alert alert-info fade in' data-alert='alert'>
        <h3>
                <a href="#">Cadastrado com sucesso!</a>
        </h3>

    </div>
    -->

        <style>
            .entry:not(:first-of-type)
            {
                margin-top: 10px;
            }

            .glyphicon
            {
                font-size: 12px;
            }

            td {
                padding:2px;
            }
            body{ background: #ebebeb; }

        </style>


        @if (session('status'))
            <div class="alert alert-success" data-alert='alert'>
                {{ session('status') }}
            </div>
        @endif

        <div class="row-fluid">
            @if($errors->any())
                <ul class="alert alert-error span12">
                    @foreach($errors->all() as $error)
                        <li style="list-style: none;">{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
        </div>


        <div class="span12" style="background-color: #FF9B34; color: #ffffff;">
            <div class="alert">
               <div style="float: left; text-align: right; margin-right: 10px; ">Código do Cliente:</div> <input type="search" name="search" id="search" />
                <div style="float: right; text-align: right;">
                    <a href="{{ asset('/clientes/inserir')}}">Cadastrar Novo Cliente <i class="glyphicon glyphicon-user"></i> </a>
                </div>
            </div>
        </div>

        <div style="clear: both;"></div>

        <div class="col-md-12">
            <div class="form-group" style="float: left; margin-right: 20px; width: 25%;">
                <label class="control-label" for="escolhaProduto">Esolha produto</label>
                <input class="form-control" name="size" type="text" placeholder="Size" required />

            </div>
            <div class="form-group" style="float: left; margin-right: 20px; width: 25%;">
                <label class="control-label" for="quantidade">Quantidade</label>
                <input class="form-control" name="quantity" type="number" placeholder="Quantity" required />

            </div>

            <div class="form-group" style="float: left;">
                <label class="control-label" for="escolhaProduto"> </label>
                <button class="btn btn-success btn-add" style="margin-top: 25px;" type="button">
                    <i class="glyphicon glyphicon-plus gs"></i>
                    <b> Adicionar</b>
                </button>
            </div>

        </div>

        <div style="clear: both;"></div>

        <div id="campos-table" class="col-md-12">

            <table class="table table-striped custab">
                <thead>

                <tr>
                    <th>PRODUTOS ESCOLHIDOS</th>

                    <th>QUANTIDADE</th>
                    <th class="text-center"></th>
                </tr>
                </thead>
                <tbody id="conteudo-ajax">
                    <tr>

                        <td>Produto 01</td>
                        <td>2</td>
                        <td class="text-center">

                            <a href="#" class="btn btn-danger btn-xs">
                                <span class="glyphicon glyphicon-remove"></span> Excluir
                            </a>
                        </td>
                    </tr>
                </tbody>


            </table>

            <hr style="border-color: #8c8c8c;" />
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Codigo Cliente</th>
                        <th>Nome</th>
                        <th>Ação</th>

                    </tr>
                    </thead>
                    <tbody>

                    @foreach($clientes as $cliente)
                        <tr>
                            <td>{{$cliente->codigo_cliente}}</td>
                            <td>{{ $cliente->nome }}</td>

                            <td class="text-center">
                                <a class='btn btn-info btn-xs' href="{{ asset("/clientes/edit/$cliente->id")}}">
                                    <span class="glyphicon glyphicon-edit"></span> Editar Cadastro
                                </a>
                                <a href="#addprod" class="btn btn-success btn-xs">
                                    <span class="glyphicon glyphicon-plus"></span> Adcionar Produtos
                                </a>
                            </td>

                        </tr>
                    @endforeach

                    </tbody>
                </table>
                <div class="pagination">
                    {!! $clientes->render() !!}
                </div>



        </div>


    </div>

@endsection
