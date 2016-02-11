<?php

class PagaPedido implements IComando {
    private $pedido;
    function __construct(Pedido $pedido){
        $this->pedido = $pedido;
    }
    public function executa() {
        $this->pedido->paga();
    }
}
