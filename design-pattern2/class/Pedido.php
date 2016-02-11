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
    
    public function setDataFinaliza($data){
        $this->dataFinaliza = $data;
    }
    
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
}
