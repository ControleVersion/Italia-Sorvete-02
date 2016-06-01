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
               <div style="float: left; text-align: right; margin-right: 10px; ">Código do Cliente:</div>

                <select id="clienteId">
                    <option>Escolha um Cliente</option>
                    @foreach($clientes as $cliente)
                        <option value="{{$cliente->id}}">{{$cliente->nome}}</option>
                    @endforeach
                </select>
                <input type="search" name="search" id="search" />
                <div style="float: right; text-align: right;">
                    <a href="{{ asset('/clientes/inserir')}}">Cadastrar Novo Cliente <i class="glyphicon glyphicon-user"></i> </a>
                </div>
            </div>
        </div>


        <div style="clear: both;"></div>

        <div id="campos-adicionar" style="display: none;"  class="col-md-12">

            <form id="form-cad-produto">
                    <div class="form-group" style="float: left; margin-right: 20px; width: 25%;">
                        <h2 id="tituloCliente"></h2>

                    </div>
                    <div class="form-group" style="float: left; margin-right: 20px; width: 25%;">
                        <label class="control-label" for="escolhaProduto">Esolha produto</label>
                        <input class="form-control" name="size" type="text" placeholder="Size" required />

                    </div>
                    <div class="form-group" style="float: left; margin-right: 20px; width: 25%;">
                        <label class="control-label" for="quantidade">Quantidade</label>
                        <input class="form-control" name="quantity" type="number" placeholder="Quantity" required />

                        <input id="idCliente" type="hidden" value="">
                    </div>

                    <div class="form-group" style="float: left;">
                        <label class="control-label" for="escolhaProduto"> </label>
                        <button class="btn btn-success btn-add" style="margin-top: 25px;" type="button">
                            <i class="glyphicon glyphicon-plus gs"></i>
                            <b> Adicionar</b>
                        </button>
                    </div>
            </form>

        </div>

        <div style="clear: both;"></div>

        <div id="campos-table"  class="col-md-12">

            <table id="campos-produtos" style="display: none;" class="table table-striped custab">
                <thead>

                <tr>
                    <th>PRODUTOS ESCOLHIDOS</th>

                    <th>QUANTIDADE</th>
                    <th class="text-center"></th>
                </tr>
                </thead>
                <tbody id="conteudo-ajax">
                    <!--
                    <tr>

                            <td>Produto 01</td>
                            <td>2</td>
                            <td class="text-center">

                                <a href="#" class="btn btn-danger btn-xs">
                                    <span class="glyphicon glyphicon-remove"></span> Excluir
                                </a>
                            </td>
                        </tr>
                    -->
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
                            <td id="nomeCliente">{{ $cliente->nome }}</td>

                            <td class="text-center">
                                <a class='btn btn-info btn-xs' href="{{ asset("/clientes/edit/$cliente->id")}}">
                                    <span class="glyphicon glyphicon-edit"></span> Editar Cadastro
                                </a>
                                <a href="#addprod" onclick="adicionarProdutos('{{ $cliente->id }}', '{{$cliente->nome}}')" class="btn btn-success btn-xs">
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
<script>
    setTimeout(function () {
        $('#clienteId').on('change', function() {
            alert( this.value ); // or $(this).val()
        });
    }, 2000);

    function decode_utf8(s) {

        return decodeURIComponent(escape(s));

    }

    function adicionarProdutos(id, nome){
        $('#campos-adicionar').show();
        $('#campos-produtos').show();

        $("#tituloCliente").html( nome );
        $("input#idCliente").attr('value', id );


        $.ajax({
            url: "http://localhost/www/SORVETE_ITALIA/Italia-Sorvete-02/public/orcamentos/index", //URL de destino
            dataType: "json", //Tipo de Retorno
            type: 'GET',
            contentType: "application/json; charset=utf-8",
            data: { get_param: 'value' },
            success: function(json){ //Se ocorrer tudo certo

                //resgatando a lista de produtos do ultimo orcamento gerado
                for(x=0; x < json.length; x++ ) {
                    $('#conteudo-ajax').append(
                            '<tr id="rest3"><td>'+ json[x].nome_produto +'</td><td>' +json[x].preco+ '</td><td class="text-center"><a class="btn btn-info btn-xs" href="#"><span class="glyphicon glyphicon-edit"></span> Edit</a> <span onclick="removeItemProd(3)" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Del</span></td></tr>'

                    );
                }
                console.log(decodeURIComponent(escape(json)) );
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(xhr.status);
                alert(thrownError);
            }
        });

        console.log(id +" - " + nome);
    }

</script>
@endsection
