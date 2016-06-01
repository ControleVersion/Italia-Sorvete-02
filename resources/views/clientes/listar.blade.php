@extends('app')

@section('content')

    <style>
        body{ background: #ebebeb; }
        /*
        .entry:not(:first-of-type) {
            margin-top: 10px;
        }

        .glyphicon {
            font-size: 12px;
        }

        td {
            padding:2px;
        }
        */
    </style>



    <div class="top-administrador">cadastro de clientes</div>


    <div class="box-itens">

        <!-- INÍCIO DO BOX DE BUSCA -->
        <div class="box-busca">
            <form role="form" method="post">

                <div class="lbl-codigo-cliente"><label class="control-label" for="LabelInputNome">Código do Cliente</label></div>
                <div class="lbl-cmp-codigo"><input type="text" class="form-control form-busca" name="InputNome" id="InputNome" placeholder="Digite o nome do cliente"></div>
                <div class="lbl-controles"><a href="#" class="lnk-cadastrar-novo-cliente">Cadastrar Novo Cliente</a></div>

            </form>
        </div>
        <!-- FIM DO BOX DE BUSCA -->

        <!-- INÍCIO DA LISTAGEM DE CLIENTES -->
        <div class="listagem-clientes" id="accordion">

            <!-- -->
            <div class="panel">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <div class="cmp-nm-cliente"><a data-toggle="collapse" data-parent="#accordion" href="#collapse1" class="nm-cliente">Fulano Beltrano</a></div>
                        <div class="cmp-controle-cliente">
                            <a href="#" class="lnk-editar-cadastro" title="Editar cadastro">Editar cadastro</a>
                            <a href="#" class="lnk-adicionar-cadastro" title="Adicionar produtos">Adicionar produtos</a>
                        </div>
                    </h4>
                </div>
                <div id="collapse1" class="panel-collapse collapse">
                    <div class="panel-body">

                        <!-- INÍCIO DO BOX DE ESCOLHA DE PRODUTOS -->
                        <div class="box-escolha-produtos">
                            <form role="form" method="post">

                                <div class="lbl-escolha-produto"><label class="control-label" for="LabelInputNome">Escolher produto</label></div>
                                <div class="lbl-frm-busca-produto">
                                    <select id="lunch" class="selectpicker cmp-selecione" data-live-search="true" title="Por favor selecione um produto">
                                        <option>Produto 01</option>
                                        <option>Produto 02</option>
                                        <option>Produto 03</option>
                                        <option>Produto 04</option>
                                        <option>Produto 05</option>
                                    </select>
                                </div>
                                <div class="lbl-quantidade"><label class="control-label" for="LabelInputNome">Quantidade</label></div>
                                <div class="lbl-frm-quantidade"><input type="text" class="form-control form-quantidade" name="InputNome" id="InputNome"></div>
                                <div class="lbl-adicionar-produto"><button type="submit" class="btn btn-amarelo">Adicionar</button></div>

                            </form>
                        </div>
                        <!-- FIM DO BOX DE ESCOLHA DE PRODUTOS -->

                        <!-- INÍCIO DO BOX DOS PRODUTOS ESCOLHIDOS -->
                        <div class="box-produtos-escolhidos">

                            <div class="tb-cbl-produtos">produtos escolhidos</div>
                            <div class="tb-cbl-preco">preço <span>(unitário)</span></div>
                            <div class="tb-cbl-quantidade">quantidade</div>

                            <div class="listagem-produtos">
                                <div class="listagem-produtos-conteudo">
                                    <!-- ++ -->
                                    <div class="linha-itens">
                                        <div class="it-nome">Picolé Gold Wind</div>
                                        <div class="it-preco">R$ 3,00</div>
                                        <div class="it-quantidade">80 <span>un</span></div>
                                        <div class="it-excluir"><a href="#" class="" title="excluir">excluir</a></div>
                                    </div>
                                    <!-- ++ -->
                                    <!-- ++ -->
                                    <div class="linha-itens">
                                        <div class="it-nome">Picolé Gold Wind Picolé Gold</div>
                                        <div class="it-preco">R$ 3.000,00</div>
                                        <div class="it-quantidade">80 <span>un</span></div>
                                        <div class="it-excluir"><a href="#" class="" title="excluir">excluir</a></div>
                                    </div>
                                    <!-- ++ -->
                                    <!-- ++ -->
                                    <div class="linha-itens">
                                        <div class="it-nome">Picolé Gold Wind</div>
                                        <div class="it-preco">R$ 3,00</div>
                                        <div class="it-quantidade">80 <span>un</span></div>
                                        <div class="it-excluir"><a href="#" class="" title="excluir">excluir</a></div>
                                    </div>
                                    <!-- ++ -->
                                    <!-- ++ -->
                                    <div class="linha-itens">
                                        <div class="it-nome">Picolé Gold Wind</div>
                                        <div class="it-preco">R$ 3,00</div>
                                        <div class="it-quantidade">80 <span>un</span></div>
                                        <div class="it-excluir"><a href="#" class="" title="excluir">excluir</a></div>
                                    </div>
                                    <!-- ++ -->
                                    <!-- ++ -->
                                    <div class="linha-itens">
                                        <div class="it-nome">Picolé Gold Wind</div>
                                        <div class="it-preco">R$ 3,00</div>
                                        <div class="it-quantidade">80 <span>un</span></div>
                                        <div class="it-excluir"><a href="#" class="" title="excluir">excluir</a></div>
                                    </div>
                                    <!-- ++ -->
                                    <!-- ++ -->
                                    <div class="linha-itens">
                                        <div class="it-nome">Picolé Gold Wind</div>
                                        <div class="it-preco">R$ 3,00</div>
                                        <div class="it-quantidade">80 <span>un</span></div>
                                        <div class="it-excluir"><a href="#" class="" title="excluir">excluir</a></div>
                                    </div>
                                    <!-- ++ -->
                                    <!-- ++ -->
                                    <div class="linha-itens">
                                        <div class="it-nome">Picolé Gold Wind</div>
                                        <div class="it-preco">R$ 3,00</div>
                                        <div class="it-quantidade">80 <span>un</span></div>
                                        <div class="it-excluir"><a href="#" class="" title="excluir">excluir</a></div>
                                    </div>
                                    <!-- ++ -->
                                    <!-- ++ -->
                                    <div class="linha-itens">
                                        <div class="it-nome">Picolé Gold Wind</div>
                                        <div class="it-preco">R$ 3,00</div>
                                        <div class="it-quantidade">80 <span>un</span></div>
                                        <div class="it-excluir"><a href="#" class="" title="excluir">excluir</a></div>
                                    </div>
                                    <!-- ++ --><!-- ++ -->
                                    <div class="linha-itens">
                                        <div class="it-nome">Sundae Morango</div>
                                        <div class="it-preco">R$ 3,00</div>
                                        <div class="it-quantidade">80 <span>un</span></div>
                                        <div class="it-excluir"><a href="#" class="" title="excluir">excluir</a></div>
                                    </div>
                                    <!-- ++ -->

                                </div>
                            </div>

                            <div class="cmp-soma-total">
                                <span class="valor">valor do pedido: &nbsp;<span>R$ 1.295,00*</span></span>
                            </div>

                        </div>
                        <!-- FIM DO BOX DOS PRODUTOS ESCOLHIDOS -->

                        <div class="boxbt-enviar-pedido"><button type="submit" class="btn btn-amarelo">Eviar pedido</button></div>

                    </div>
                </div>
            </div>
            <!-- -->

            <!-- -->
            <div class="panel">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <div class="cmp-nm-cliente"><a data-toggle="collapse" data-parent="#accordion" href="#collapse2" class="nm-cliente">Fulano Beltrano</a></div>
                        <div class="cmp-controle-cliente">
                            <a href="#" class="lnk-editar-cadastro" title="Editar cadastro">Editar cadastro</a>
                            <a href="#" class="lnk-adicionar-cadastro" title="Adicionar produtos">Adicionar produtos</a>
                        </div>
                    </h4>
                </div>
                <div id="collapse2" class="panel-collapse collapse">
                    <div class="panel-body">

                        <!-- INÍCIO DO BOX DE ESCOLHA DE PRODUTOS -->
                        <div class="box-escolha-produtos">
                            <form role="form" method="post">

                                <div class="lbl-escolha-produto"><label class="control-label" for="LabelInputNome">Escolher produto</label></div>
                                <div class="lbl-frm-busca-produto">
                                    <select id="lunch" class="selectpicker cmp-selecione" data-live-search="true" title="Por favor selecione um produto">
                                        <option>Produto 01</option>
                                        <option>Produto 02</option>
                                        <option>Produto 03</option>
                                        <option>Produto 04</option>
                                        <option>Produto 05</option>
                                    </select>
                                </div>
                                <div class="lbl-quantidade"><label class="control-label" for="LabelInputNome">Quantidade</label></div>
                                <div class="lbl-frm-quantidade"><input type="text" class="form-control form-quantidade" name="InputNome" id="InputNome"></div>
                                <div class="lbl-adicionar-produto"><button type="submit" class="btn btn-amarelo">Adicionar</button></div>

                            </form>
                        </div>
                        <!-- FIM DO BOX DE ESCOLHA DE PRODUTOS -->

                        <!-- INÍCIO DO BOX DOS PRODUTOS ESCOLHIDOS -->
                        <div class="box-produtos-escolhidos">

                            <div class="tb-cbl-produtos">produtos escolhidos</div>
                            <div class="tb-cbl-preco">preço <span>(unitário)</span></div>
                            <div class="tb-cbl-quantidade">quantidade</div>

                            <div class="listagem-produtos">
                                <div class="listagem-produtos-conteudo">
                                    <!-- ++ -->
                                    <div class="linha-itens">
                                        <div class="it-nome">Picolé Gold Wind</div>
                                        <div class="it-preco">R$ 3,00</div>
                                        <div class="it-quantidade">80 <span>un</span></div>
                                        <div class="it-excluir"><a href="#" class="" title="excluir">excluir</a></div>
                                    </div>
                                    <!-- ++ -->
                                    <!-- ++ -->
                                    <div class="linha-itens">
                                        <div class="it-nome">Picolé Gold Wind</div>
                                        <div class="it-preco">R$ 3,00</div>
                                        <div class="it-quantidade">80 <span>un</span></div>
                                        <div class="it-excluir"><a href="#" class="" title="excluir">excluir</a></div>
                                    </div>
                                    <!-- ++ -->
                                    <!-- ++ -->
                                    <div class="linha-itens">
                                        <div class="it-nome">Picolé Gold Wind</div>
                                        <div class="it-preco">R$ 3,00</div>
                                        <div class="it-quantidade">80 <span>un</span></div>
                                        <div class="it-excluir"><a href="#" class="" title="excluir">excluir</a></div>
                                    </div>
                                    <!-- ++ -->
                                    <!-- ++ -->
                                    <div class="linha-itens">
                                        <div class="it-nome">Picolé Gold Wind</div>
                                        <div class="it-preco">R$ 3,00</div>
                                        <div class="it-quantidade">80 <span>un</span></div>
                                        <div class="it-excluir"><a href="#" class="" title="excluir">excluir</a></div>
                                    </div>
                                    <!-- ++ -->
                                    <!-- ++ -->
                                    <div class="linha-itens">
                                        <div class="it-nome">Picolé Gold Wind</div>
                                        <div class="it-preco">R$ 3,00</div>
                                        <div class="it-quantidade">80 <span>un</span></div>
                                        <div class="it-excluir"><a href="#" class="" title="excluir">excluir</a></div>
                                    </div>
                                    <!-- ++ -->
                                    <!-- ++ -->
                                    <div class="linha-itens">
                                        <div class="it-nome">Picolé Gold Wind</div>
                                        <div class="it-preco">R$ 3,00</div>
                                        <div class="it-quantidade">80 <span>un</span></div>
                                        <div class="it-excluir"><a href="#" class="" title="excluir">excluir</a></div>
                                    </div>
                                    <!-- ++ -->
                                    <!-- ++ -->
                                    <div class="linha-itens">
                                        <div class="it-nome">Picolé Gold Wind</div>
                                        <div class="it-preco">R$ 3,00</div>
                                        <div class="it-quantidade">80 <span>un</span></div>
                                        <div class="it-excluir"><a href="#" class="" title="excluir">excluir</a></div>
                                    </div>
                                    <!-- ++ -->
                                    <!-- ++ -->
                                    <div class="linha-itens">
                                        <div class="it-nome">Picolé Gold Wind</div>
                                        <div class="it-preco">R$ 3,00</div>
                                        <div class="it-quantidade">80 <span>un</span></div>
                                        <div class="it-excluir"><a href="#" class="" title="excluir">excluir</a></div>
                                    </div>
                                    <!-- ++ --><!-- ++ -->
                                    <div class="linha-itens">
                                        <div class="it-nome">Sundae Morango</div>
                                        <div class="it-preco">R$ 3,00</div>
                                        <div class="it-quantidade">80 <span>un</span></div>
                                        <div class="it-excluir"><a href="#" class="" title="excluir">excluir</a></div>
                                    </div>
                                    <!-- ++ -->

                                </div>
                            </div>

                            <div class="cmp-soma-total">
                                <span class="valor">valor do pedido: &nbsp;<span>R$ 1.295,00*</span></span>
                            </div>

                        </div>
                        <!-- FIM DO BOX DOS PRODUTOS ESCOLHIDOS -->

                        <div class="boxbt-enviar-pedido"><button type="submit" class="btn btn-amarelo">Eviar pedido</button></div>

                    </div>
                </div>
            </div>
            <!-- -->

            <!-- -->
            <div class="panel">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <div class="cmp-nm-cliente"><a data-toggle="collapse" data-parent="#accordion" href="#collapse3" class="nm-cliente">Fulano Beltrano</a></div>
                        <div class="cmp-controle-cliente">
                            <a href="#" class="lnk-editar-cadastro" title="Editar cadastro">Editar cadastro</a>
                            <a href="#" class="lnk-adicionar-cadastro" title="Adicionar produtos">Adicionar produtos</a>
                        </div>
                    </h4>
                </div>
                <div id="collapse3" class="panel-collapse collapse">
                    <div class="panel-body">

                        <!-- INÍCIO DO BOX DE ESCOLHA DE PRODUTOS -->
                        <div class="box-escolha-produtos">
                            <form role="form" method="post">

                                <div class="lbl-escolha-produto"><label class="control-label" for="LabelInputNome">Escolher produto</label></div>
                                <div class="lbl-frm-busca-produto">
                                    <select id="lunch" class="selectpicker cmp-selecione" data-live-search="true" title="Por favor selecione um produto">
                                        <option>Produto 01</option>
                                        <option>Produto 02</option>
                                        <option>Produto 03</option>
                                        <option>Produto 04</option>
                                        <option>Produto 05</option>
                                    </select>
                                </div>
                                <div class="lbl-quantidade"><label class="control-label" for="LabelInputNome">Quantidade</label></div>
                                <div class="lbl-frm-quantidade"><input type="text" class="form-control form-quantidade" name="InputNome" id="InputNome"></div>
                                <div class="lbl-adicionar-produto"><button type="submit" class="btn btn-amarelo">Adicionar</button></div>

                            </form>
                        </div>
                        <!-- FIM DO BOX DE ESCOLHA DE PRODUTOS -->

                        <!-- INÍCIO DO BOX DOS PRODUTOS ESCOLHIDOS -->
                        <div class="box-produtos-escolhidos">

                            <div class="tb-cbl-produtos">produtos escolhidos</div>
                            <div class="tb-cbl-preco">preço <span>(unitário)</span></div>
                            <div class="tb-cbl-quantidade">quantidade</div>

                            <div class="listagem-produtos">
                                <div class="listagem-produtos-conteudo">
                                    <!-- ++ -->
                                    <div class="linha-itens">
                                        <div class="it-nome">Picolé Gold Wind</div>
                                        <div class="it-preco">R$ 3,00</div>
                                        <div class="it-quantidade">80 <span>un</span></div>
                                        <div class="it-excluir"><a href="#" class="" title="excluir">excluir</a></div>
                                    </div>
                                    <!-- ++ -->
                                    <!-- ++ -->
                                    <div class="linha-itens">
                                        <div class="it-nome">Picolé Gold Wind</div>
                                        <div class="it-preco">R$ 3,00</div>
                                        <div class="it-quantidade">80 <span>un</span></div>
                                        <div class="it-excluir"><a href="#" class="" title="excluir">excluir</a></div>
                                    </div>
                                    <!-- ++ -->
                                    <!-- ++ -->
                                    <div class="linha-itens">
                                        <div class="it-nome">Picolé Gold Wind</div>
                                        <div class="it-preco">R$ 3,00</div>
                                        <div class="it-quantidade">80 <span>un</span></div>
                                        <div class="it-excluir"><a href="#" class="" title="excluir">excluir</a></div>
                                    </div>
                                    <!-- ++ -->
                                    <!-- ++ -->
                                    <div class="linha-itens">
                                        <div class="it-nome">Picolé Gold Wind</div>
                                        <div class="it-preco">R$ 3,00</div>
                                        <div class="it-quantidade">80 <span>un</span></div>
                                        <div class="it-excluir"><a href="#" class="" title="excluir">excluir</a></div>
                                    </div>
                                    <!-- ++ -->
                                    <!-- ++ -->
                                    <div class="linha-itens">
                                        <div class="it-nome">Picolé Gold Wind</div>
                                        <div class="it-preco">R$ 3,00</div>
                                        <div class="it-quantidade">80 <span>un</span></div>
                                        <div class="it-excluir"><a href="#" class="" title="excluir">excluir</a></div>
                                    </div>
                                    <!-- ++ -->
                                    <!-- ++ -->
                                    <div class="linha-itens">
                                        <div class="it-nome">Picolé Gold Wind</div>
                                        <div class="it-preco">R$ 3,00</div>
                                        <div class="it-quantidade">80 <span>un</span></div>
                                        <div class="it-excluir"><a href="#" class="" title="excluir">excluir</a></div>
                                    </div>
                                    <!-- ++ -->
                                    <!-- ++ -->
                                    <div class="linha-itens">
                                        <div class="it-nome">Picolé Gold Wind</div>
                                        <div class="it-preco">R$ 3,00</div>
                                        <div class="it-quantidade">80 <span>un</span></div>
                                        <div class="it-excluir"><a href="#" class="" title="excluir">excluir</a></div>
                                    </div>
                                    <!-- ++ -->
                                    <!-- ++ -->
                                    <div class="linha-itens">
                                        <div class="it-nome">Picolé Gold Wind</div>
                                        <div class="it-preco">R$ 3,00</div>
                                        <div class="it-quantidade">80 <span>un</span></div>
                                        <div class="it-excluir"><a href="#" class="" title="excluir">excluir</a></div>
                                    </div>
                                    <!-- ++ --><!-- ++ -->
                                    <div class="linha-itens">
                                        <div class="it-nome">Sundae Morango</div>
                                        <div class="it-preco">R$ 3,00</div>
                                        <div class="it-quantidade">80 <span>un</span></div>
                                        <div class="it-excluir"><a href="#" class="" title="excluir">excluir</a></div>
                                    </div>
                                    <!-- ++ -->

                                </div>
                            </div>

                            <div class="cmp-soma-total">
                                <span class="valor">valor do pedido: &nbsp;<span>R$ 1.295,00*</span></span>
                            </div>

                        </div>
                        <!-- FIM DO BOX DOS PRODUTOS ESCOLHIDOS -->

                        <div class="boxbt-enviar-pedido"><button type="submit" class="btn btn-amarelo">Eviar pedido</button></div>

                    </div>
                </div>
            </div>
            <!-- -->

        </div>
        <!-- FIM DA LISTAGEM DE CLIENTES -->

    </div>

    <!--

    <div class="box-busca">
            efef
        </div>

    <div class="row">
        <div class="col-sm-6" style="padding:0;">32e2</div>
        <div class="col-sm-6" style="padding:0;">wfsdf</div>
    </div>
    -->



@endsection
