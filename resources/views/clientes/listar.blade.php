@extends('app')

@section('content')
    <div class='alert alert-info fade in' data-alert='alert'>
        <h3>
                <a href="#">Cadastrado com sucesso!</a>
        </h3>

    </div>


    
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

        </style>


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
                        <td class="text-center"><a class='btn btn-info btn-xs' href="#"><span class="glyphicon glyphicon-edit"></span> Edit</a> <a href="#" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Del</a></td>
                    </tr>
                </tbody>


            </table>


        </div>


    </div>

@endsection
