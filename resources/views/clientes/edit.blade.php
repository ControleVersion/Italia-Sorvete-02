@extends('app')

@section('content')

    @if(isset($resp))
        <div id="respCadastro" class='alert alert-info fade in' data-alert='alert'>
            {{$resp['resp']}}

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



    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-info">
                <div class="panel-heading"> EDITAR CLIENTE</div>
                <div class="panel-body">
                    <p> <strong>Dados Pessoais</strong></p>


                    {!! Form::model($cliente,['route'=>['clientes.update',$cliente->id],'method'=>'put', 'role'=>'form']) !!}

                    <div class="form-group" style="float: left; margin-right: 20px; width: 70%;">

                        {!! Form::label('nome','Nome', ['style'=>'text-align:left; margin-right:10px;','class'=>'control-label']) !!}
                        {!! Form::text('nome', null, ['class'=> 'form-control', 'placeholder'=> 'Nome Completo', 'required']) !!}

                    </div>

                    <div class="form-group" style="float: left; margin-right: 20px; width: 25%;">

                        {!! Form::label('codigo_cliente','Código Cliente', ['style'=>'text-align:left; margin-right:10px;','class'=>'control-label']) !!}
                        {!! Form::text('codigo_cliente', null, ['class'=> 'form-control', 'maxlength'=>'140','placeholder'=> 'Código Cliente', 'required']) !!}

                    </div>

                    <div class="form-group" style="clear: both;">
                    </div>

                    <div class="form-group" style="float: left; margin-right: 20px; width: 70%;">


                        {!! Form::label('email','E-mail', ['style'=>'text-align:left; margin-right:10px;','class'=>'control-label']) !!}
                        {!! Form::text('email', null, ['class'=> 'form-control','maxlength'=>'150', 'placeholder'=> 'E-mail', 'required']) !!}

                    </div>

                    <div class="form-group" style="float: left; margin-right: 20px; width: 25%;">

                        {!! Form::label('cpf','CPF', ['style'=>'text-align:left; margin-right:10px;','class'=>'control-label']) !!}
                        {!! Form::text('cpf', null, ['class'=> 'form-control','maxlength'=>'14', 'placeholder'=> 'CPF', 'required']) !!}

                    </div>

                    <div class="form-group" style="clear: both;">
                    </div>

                    <div class="form-group" style="float: left; margin-right: 20px; width: 25%;">


                        {!! Form::label('telefone1','Telefone 1', ['style'=>'text-align:left; margin-right:10px;','class'=>'control-label']) !!}
                        {!! Form::text('telefone1', null, ['class'=> 'form-control','maxlength'=>'14', 'placeholder'=> '(XX) XXXX-XXXX']) !!}

                    </div>
                    <div class="form-group" style="float: left; margin-right: 20px; width: 25%;">

                        {!! Form::label('telefone2','Telefone 2', ['style'=>'text-align:left; margin-right:10px;','class'=>'control-label']) !!}
                        {!! Form::text('telefone2', null, ['class'=> 'form-control','maxlength'=>'14', 'placeholder'=> '(XX) XXXX-XXXX']) !!}

                    </div>
                    <div class="form-group" style="float: left; margin-right: 20px; width: 25%;">


                        {!! Form::label('celular','Celular', ['style'=>'text-align:left; margin-right:10px;','class'=>'control-label']) !!}
                        {!! Form::text('celular', null, ['class'=> 'form-control','maxlength'=>'15', 'placeholder'=> '(XX) XXXX-XXXXX', 'required']) !!}

                    </div>

                    <div class="form-group" style="clear: both;">
                    </div>

                    <p> <strong>Endereço</strong> </p>

                    <div class="form-group" style="float: left; margin-right: 20px; width: 25%;">


                        {!! Form::label('cep','CEP', ['style'=>'text-align:left; margin-right:10px;','class'=>'control-label']) !!}
                        {!! Form::text('cep', null, ['class'=> 'form-control','maxlength'=>'9', 'placeholder'=> 'XXXXX-XXX']) !!}

                    </div>
                    <div class="form-group" style="float: left; margin-right: 20px; width: 25%;">

                        {!! Form::label('rua','Rua', ['style'=>'text-align:left; margin-right:10px;','class'=>'control-label']) !!}
                        {!! Form::text('rua', null, ['class'=> 'form-control','maxlength'=>'15', 'placeholder'=> 'Logradouro']) !!}

                    </div>
                    <div class="form-group" style="float: left; margin-right: 20px; width: 25%;">

                        {!! Form::label('numero','Número', ['style'=>'text-align:left; margin-right:10px;','class'=>'control-label']) !!}
                        {!! Form::text('numero', null, ['class'=> 'form-control','maxlength'=>'25', 'placeholder'=> '']) !!}

                    </div>

                    <div class="form-group" style="clear: both;">
                    </div>

                    <div class="form-group" style="float: left; margin-right: 20px; width: 25%;">

                        {!! Form::label('bairro','Bairro', ['style'=>'text-align:left; margin-right:10px;','class'=>'control-label']) !!}
                        {!! Form::text('bairro', null, ['class'=> 'form-control','maxlength'=>'150', 'placeholder'=> 'Bairro']) !!}

                    </div>
                    <div class="form-group" style="float: left; margin-right: 20px; width: 25%;">

                        {!! Form::label('cidade','Cidade', ['style'=>'text-align:left; margin-right:10px;','class'=>'control-label']) !!}
                        {!! Form::text('cidade', null, ['class'=> 'form-control','maxlength'=>'150', 'placeholder'=> 'Cidade']) !!}

                    </div>
                    <div class="form-group" style="float: left; margin-right: 20px; width: 25%;">



                        {!! Form::label('estado','Estado', ['style'=>'text-align:left; margin-right:10px;','class'=>'control-label']) !!}

                        {!! Form::select(
                                    'estado',
                                    [
                                        "0"=>"--",
                                        "AC"=>'Acre',
                                        "AL"=>'Alagoas',
                                        "AP"=>'Amapá',
                                        "AM"=>'Amazonas',
                                        "BA"=>'Bahia',
                                        "CE"=>'Ceará',
                                        "DF"=>'Distrito Federal',
                                        "ES"=>'Espirito Santo',
                                        "GO"=>'Goiás',
                                        "MA"=>'Maranhão',
                                        "MS"=>'Mato Grosso do Sul',
                                        "MT"=>'Mato Grosso',
                                        "MG"=>'Minas Gerais',
                                        "PA"=>'Pará',
                                        "PB"=>'Paraíba',
                                        "PR"=>'Paraná',
                                        "PE"=>'Pernambuco',
                                        "PI"=>'Piauí',
                                        "RJ"=>'Rio de Janeiro',
                                        "RN"=>'Rio Grande do Norte',
                                        "RS"=>'Rio Grande do Sul',
                                        "RO"=>'Rondônia',
                                        "RR"=>'Roraima',
                                        "SC"=>'Santa Catarina',
                                        "SP"=>'São Paulo',
                                        "SE"=>'Sergipe',
                                        "TO"=>'Tocantins'
                                    ],
                                    ['class'=> 'form-control']
                                    ) !!}

                    </div>

                    <div class="form-group" style="clear: both;">
                    </div>


                    <div class="form-group">
                        {!! Form::submit('Concluir Cadastro', ['style'=>'margin-top: 16px;','class'=>'btn btn-yellow']) !!}
                    </div>

                    {!! Form::close() !!}

                </div>
            </div>
        </div>

    </div>





    </div>

@endsection









