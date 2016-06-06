@extends('app')

@section('content')

    <style>
        body{ background: #ebebeb; }
    </style>



    <div class='alert alert-info fade in' data-alert='alert'>
        <h3>
            <a href="#">Cadastrado com sucesso!</a>
        </h3>

    </div>

    <div class="top-administrador">cadastro de clientes</div>

    <div class="box-itens">
        <div class="box-cadastro-novos-clientes">
            <form role="form" method="post">

                <span class="tit-secao">Dados Pessoais</span>

                <div class="campos-formulario">

                    <div class="cmp-nome">
                        <label class="control-label" for="LabelInputNome">Nome</label>
                        <input type="text" class="form-control frm-cadastro-clientes" name="InputNome" id="InputNome" placeholder="">
                    </div>

                    <div class="cmp-codigo-cliente">
                        <label class="control-label" for="LabelInputCodigoCliente">Código do Cliente</label>
                        <input type="text" class="form-control frm-cadastro-clientes" name="InputCodigoCliente" id="InputCodigoCliente" placeholder="">
                    </div>

                    <div class="cmp-email">
                        <label class="control-label" for="LabelInputEmail">E-mail</label>
                        <input type="email" class="form-control frm-cadastro-clientes" name="InputEmail" id="InputEmail" placeholder="">
                    </div>

                    <div class="cmp-cpf">
                        <label class="control-label" for="LabelInputCPF">CPF</label>
                        <input type="text" class="form-control frm-cadastro-clientes" name="InputCPF" id="InputCPF" placeholder="">
                    </div>

                    <div class="cmp-telefone1">
                        <label class="control-label" for="LabelInputCPF">Telefone 1</label>
                        <input type="text" class="form-control frm-cadastro-clientes" name="InputTelefone1" id="InputTelefone1" placeholder="">
                    </div>

                    <div class="cmp-telefone2">
                        <label class="control-label" for="LabelInputCPF">Telefone 2</label>
                        <input type="text" class="form-control frm-cadastro-clientes" name="InputTelefone2" id="InputTelefone2" placeholder="">
                    </div>

                    <div class="cmp-celular">
                        <label class="control-label" for="LabelInputCPF">Celular</label>
                        <input type="text" class="form-control frm-cadastro-clientes" name="InputCelular" id="InputCelular" placeholder="">
                    </div>

                </div>

                <span class="tit-secao">Endereço</span>

                <div class="campos-formulario">

                    <div class="cmp-celular">
                        <label class="control-label" for="LabelInputCEP">CEP</label>
                        <input type="text" class="form-control frm-cadastro-clientes" name="InputCEP" id="InputCEP" placeholder="">
                    </div>

                    <div class="cmp-rua">
                        <label class="control-label" for="LabelInputRua">Rua</label>
                        <input type="text" class="form-control frm-cadastro-clientes" name="InputRua" id="InputRua" placeholder="">
                    </div>

                    <div class="cmp-numero">
                        <label class="control-label" for="LabelInputNumero">Número</label>
                        <input type="text" class="form-control frm-cadastro-clientes" name="InputNumero" id="InputNumero" placeholder="">
                    </div>

                    <div class="cmp-bairro">
                        <label class="control-label" for="LabelInputBairro">Bairro</label>
                        <input type="text" class="form-control frm-cadastro-clientes" name="InputBairro" id="InputBairro" placeholder="">
                    </div>

                    <div class="cmp-cidade">
                        <label class="control-label" for="LabelInputRua">Cidade</label>
                        <input type="text" class="form-control frm-cadastro-clientes" name="InputRua" id="InputRua" placeholder="">
                    </div>

                    <div class="cmp-uf">
                        <label class="control-label" for="LabelInputRua">UF</label>
                        <select type="select" name="InputUF" id="InputUF" class="form-control frm-cadastro-clientes">
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

                </div>

                <div style="clear: both; padding: 0 0 50px 0;">

                    <div class="lnk-voltar">
                        <a href="#">&lt; voltar</a>
                    </div>

                    <div class="btn-confirmar-cadastro">
                        <button type="submit" class="btn btn-amarelo">Concluir cadastro</button>
                    </div>

                </div>

            </form>
        </div>
    </div>



@endsection
