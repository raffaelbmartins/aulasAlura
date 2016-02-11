<?php

class Pedido {
    private $cliente;
    private $valor;
    private $status;
    private $dataFinaliza;
    
    
    function __construct($cliente, $valor, $status){
        $this->cliente = $cliente;
        $this->valor = $valor;
        $this->status = $status;
    }
    
<<<<<<< HEAD
=======
    public function setDataFinaliza($data){
        $this->dataFinaliza = $data;
    }
    
>>>>>>> cf203068d398b38da691574f13e5faea43ceda10
    public function getCliente(){
        return $this->cliente;
    }
    
    public function getValor(){
        return $this->valor;
    }
    
    public function getStatus(){
        return $this->status;
    }
    
    public function getDataFinaliza(){
        return $this->dataFinaliza;
    }
<<<<<<< HEAD
    
    public function paga() {
        $this->status = new Pago();
    }
    
    public function finaliza() {
        $this->dataFinalizacao = date("m/d/Y");
        $this->status = new Entregue();
    }
=======
>>>>>>> cf203068d398b38da691574f13e5faea43ceda10
}
