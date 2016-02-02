<?php

class Contrato {
    
    private $nomeCliente;
    private $data;
    private $tipo;
    
    function __construct($nome,$data,$tipo=null){
        $this->nomeCliente = $nome;
        $this->data = $data;
        if( !is_null($tipo) ){
            $this->tipo = $tipo;
        } else {
            $this->tipo = new Novo();
        }
    }
    
    public function getCliente(){
        return $this->nomeCliente;
    }
    
    public function getData(){
        return $this->data;
    }
    
    public function getTipo(){
        return $this->tipo;
    }
    
    public function setTipo(ITipoDeContrato $tipo){
        $this->tipo = $tipo;
    }
    
    public function avanca(){
        $this->tipo->avanca($this);
    }
    
    public function salvaEstado(){
        return new Estado(new Contrato($this->nomeCliente,$this->data,$this->tipo));
    }
    
    public function restaura(Estado $estado) {
        $this->data = $estado->getEstado()->getData();
        $this->cliente = $estado->getEstado()->getCliente();
        $this->tipo = $estado->getEstado()->getTipo();
    }
    
}
