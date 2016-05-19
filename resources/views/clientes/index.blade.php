@extends('app')

@section('content')
    <div class='alert alert-info fade in' data-alert='alert'>
        <h3>
                <a href="#">Cadastrado com sucesso!</a>
        </h3>

    </div>



    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-info">
                <div class="panel-heading">CADASTRAR NOVO CLIENTE</div>
                <div class="panel-body">
                    <p> <strong>Dados Pessoais</strong></p>
                    <form role="form" method="post">
                        <div class="form-group" style="float: left; margin-right: 20px; width: 70%;">
                            <label class="control-label" for="LabelInputNome">Nome</label>
                            <input type="text" class="form-control" name="InputNome" id="InputNome" placeholder="Nome completo">

                        </div>

                        <div class="form-group" style="float: left; margin-right: 20px; width: 25%;">
                            <label class="control-label" for="LabelInputCodigoCliente">Código Cliente</label>
                            <input type="text" class="form-control" name="InputCodigoCliente" id="InputCodigoCliente" placeholder="Código Cliente">

                        </div>

                        <div class="form-group" style="clear: both;">
                        </div>

                        <div class="form-group" style="float: left; margin-right: 20px; width: 70%;">
                            <label class="control-label" for="LabelInputEmail">E-mail</label>
                            <input type="email" class="form-control" name="InputEmail" id="InputEmail" placeholder="Email">

                        </div>

                        <div class="form-group" style="float: left; margin-right: 20px; width: 25%;">
                            <label class="control-label" for="LabelInputCPF">CPF</label>
                            <input type="text" class="form-control" name="InputCPF" id="InputCPF" placeholder="">

                        </div>

                        <div class="form-group" style="clear: both;">
                        </div>

                        <div class="form-group" style="float: left; margin-right: 20px; width: 25%;">
                            <label class="control-label" for="LabelInputCPF">Telefone 1</label>
                            <input type="text" class="form-control" name="InputTelefone1" id="InputTelefone1" placeholder="">

                        </div>
                        <div class="form-group" style="float: left; margin-right: 20px; width: 25%;">
                            <label class="control-label" for="LabelInputCPF">Telefone 2</label>
                            <input type="text" class="form-control" name="InputTelefone2" id="InputTelefone2" placeholder="">

                        </div>
                        <div class="form-group" style="float: left; margin-right: 20px; width: 25%;">
                            <label class="control-label" for="LabelInputCPF">Celular</label>
                            <input type="text" class="form-control" name="InputCelular" id="InputCelular" placeholder="">

                        </div>

                        <div class="form-group" style="clear: both;">
                        </div>

                        <p> <strong>Endereço</strong> </p>

                        <div class="form-group" style="float: left; margin-right: 20px; width: 25%;">
                            <label class="control-label" for="LabelInputCEP">CEP</label>
                            <input type="text" class="form-control" name="InputCEP" id="InputCEP" placeholder="">

                        </div>
                        <div class="form-group" style="float: left; margin-right: 20px; width: 25%;">
                            <label class="control-label" for="LabelInputRua">Rua</label>
                            <input type="text" class="form-control" name="InputRua" id="InputRua" placeholder="">

                        </div>
                        <div class="form-group" style="float: left; margin-right: 20px; width: 25%;">
                            <label class="control-label" for="LabelInputNumero">Celular</label>
                            <input type="text" class="form-control" name="InputNumero" id="InputNumero" placeholder="">

                        </div>

                        <div class="form-group" style="clear: both;">
                        </div>

                        <div class="form-group" style="float: left; margin-right: 20px; width: 25%;">
                            <label class="control-label" for="LabelInputBairro">Bairro</label>
                            <input type="text" class="form-control" name="InputBairro" id="InputBairro" placeholder="">

                        </div>
                        <div class="form-group" style="float: left; margin-right: 20px; width: 25%;">
                            <label class="control-label" for="LabelInputRua">Cidade</label>
                            <input type="text" class="form-control" name="InputRua" id="InputRua" placeholder="">

                        </div>
                        <div class="form-group" style="float: left; margin-right: 20px; width: 25%;">
                            <label class="control-label" for="LabelInputUF">Estado</label>

                            <select type="select" name="InputUF" id="InputUF" class="form-control">
                                <option value=""> -- </option>
                                <option value="AC">Acre</option>
                                <option value="AL">Alagoas</option>
                                <option value="AP">Amapá</option>
                                <option value="AM">Amazonas</option>
                                <option value="BA">Bahia</option>
                                <option value="CE">Ceará</option>
                                <option value="DF">Distrito Federal</option>
                                <option value="ES">Espirito Santo</option>
                                <option value="GO">Goiás</option>
                                <option value="MA">Maranhão</option>
                                <option value="MS">Mato Grosso do Sul</option>
                                <option value="MT">Mato Grosso</option>
                                <option value="MG">Minas Gerais</option>
                                <option value="PA">Pará</option>
                                <option value="PB">Paraíba</option>
                                <option value="PR">Paraná</option>
                                <option value="PE">Pernambuco</option>
                                <option value="PI">Piauí</option>
                                <option value="RJ">Rio de Janeiro</option>
                                <option value="RN">Rio Grande do Norte</option>
                                <option value="RS">Rio Grande do Sul</option>
                                <option value="RO">Rondônia</option>
                                <option value="RR">Roraima</option>
                                <option value="SC">Santa Catarina</option>
                                <option value="SP">São Paulo</option>
                                <option value="SE">Sergipe</option>
                                <option value="TO">Tocantins</option>

                            </select>

                        </div>

                        <div class="form-group" style="clear: both;">
                        </div>


                        <button type="submit" class="btn btn-yellow">Concluir Cadastro</button>
                    </form>

                </div>
            </div>
        </div>

    </div>

    
       


    </div>

@endsection
