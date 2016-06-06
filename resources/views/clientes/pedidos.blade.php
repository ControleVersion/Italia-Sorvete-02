@extends('app')

@section('content')

    <style>
        body{ background: #ebebeb; }
    </style>



    <div class="top-meus-pedidos">meus pedidos</div>

    <div class="box-itens">

        <div class="box-meus-pedidos">

            <span class="txt-confira">Confira os itens escolhidos e confirme seu pedido.</span>

            <div class="listagem-meus-pedidos">
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
            </div>

            <div class="bt-confirmar-pedido">
                <button type="submit" class="btn btn-amarelo">Confirmar pedido</button>
            </div>

        </div>

    </div>


    <div class="top-historico">histórico de pedidos</div>


    <div class="box-itens">

        <!-- -->
        <div class="lnh-historico-pedido">
            <div class="cmp-nm-servico">Picolés e Serviços</div>
            <div class="cmp-nm-data">21/04/2016</div>
            <div class="cmp-nm-status-pagamento">
                <span class="txt-status">Pagamento:</span>
                <span class="alerta-status-pendente">Pendente</span>
            </div>
            <div class="cmp-nm-status-pedido">
                Pedido em <span class="txt-status-finalizado">finalizado</span>
            </div>
            <div class="cmp-nm-detalhes">
                <a href="#" class="lnk-ver-detalhes">ver detalhes</a>
            </div>
        </div>
        <!-- -->
        <!-- -->
        <div class="lnh-historico-pedido">
            <div class="cmp-nm-servico">Picolés e Serviços</div>
            <div class="cmp-nm-data">21/04/2016</div>
            <div class="cmp-nm-status-pagamento">
                <span class="txt-status">Pagamento:</span>
                <span class="alerta-status-ok">Efetuado</span>
            </div>
            <div class="cmp-nm-status-pedido">
                Pedido em <span class="txt-status-andamento">andamento</span>
            </div>
            <div class="cmp-nm-detalhes">
                <a href="#" class="lnk-ver-detalhes">ver detalhes</a>
            </div>
        </div>
        <!-- -->
        <!-- -->
        <div class="lnh-historico-pedido">
            <div class="cmp-nm-servico">Picolés e Serviços</div>
            <div class="cmp-nm-data">21/04/2016</div>
            <div class="cmp-nm-status-pagamento">
                <span class="txt-status">Pagamento:</span>
                <span class="alerta-status-pendente">Pendente</span>
            </div>
            <div class="cmp-nm-status-pedido">
                Pedido em <span class="txt-status-finalizado">finalizado</span>
            </div>
            <div class="cmp-nm-detalhes">
                <a href="#" class="lnk-ver-detalhes">ver detalhes</a>
            </div>
        </div>
        <!-- -->

    </div>


@endsection