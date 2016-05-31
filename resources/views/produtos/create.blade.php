@extends('app')

@section('content')

    <style>
        body{ background: #ebebeb; }
    </style>



    <div class="row-fluid">
        @if($errors->any())
            <ul class="alert alert-error span12">
                @foreach($errors->all() as $error)
                    <li style="list-style: none;">{{ $error }}</li>
                @endforeach
            </ul>
        @endif
    </div>



    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-info">
                <div class="panel-heading">CADASTRAR NOVO PRODUTO</div>
                <div class="panel-body">
                    <p> <strong>Informações do Produto</strong></p>


                    {!! Form::open(['route'=>'produtos.store','method'=>'post', 'role'=>'form']) !!}


                    <div class="form-group" style="float: left; margin-right: 20px; width: 25%;">
                        <label class="control-label" for="LabelInputUF">Categoria: </label>

                        <!--
                        {!! Form::select(
                                'categoria_id',
                                [
                                    "0"=>"--",
                                    "01"=>'Picolé Linha Itália',
                                    "2"=>'Picolé Linha Gold',
                                    "3"=>'Picolé Linha Diet',
                                    "4"=>'Sundae',
                                    "5"=>'Outros'
                                ],
                                ['class'=> 'form-control']
                                ) !!}
                        -->

                        {!! Form::select('categoria_id', $categorias, ['class' => 'form-control',  'multiple' => false]) !!}
                    </div>

                    <div class="form-group" style="float: left; margin-right: 20px; width: 25%;">
                        <label class="control-label" for="LabelInputCodigoCliente">Nome do Produto</label>
                        {!! Form::text('nome_produto', null, ['class'=> 'form-control', 'maxlength'=>'140','placeholder'=> 'Nome', 'required']) !!}

                    </div>



                    <div class="form-group" style="float: left; margin-right: 20px; width: 25%;">
                        <label class="control-label" for="LabelInputEmail">Preço</label>


                        {!! Form::text('preco', null, ['class'=> 'form-control','maxlength'=>'20', 'placeholder'=> 'Preço', 'required']) !!}


                    </div>



                    <div class="form-group" style="clear: both;">
                    </div>

                    <div>
                        <div style="float:left;"><a href="javascript:history.back();" class="btn-voltar">&lt; voltar</a></div>
                        <div style="float:right;">

                            {!! Form::submit('Concluir Cadastro', ['style'=>'margin-top: 16px;','class'=>'btn btn-amarelo']) !!}
                        </div>
                    </div>

                    {!! Form::close() !!}



                </div>



            </div>
        </div>
    </div>

    </div>





    </div>
    <script>
      setTimeout(function () {
          $('select[name="categoria_id"]').attr('class', 'form-control');
      }, 1000);


    </script>

@endsection
