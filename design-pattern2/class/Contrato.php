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
    
    public function setTipo(ITipoDeContrato $tipo){
        $this->tipo = $tipo;
    }
    
    public function avanca(){
        $this->tipo->avanca($this);
    }
    
    public function salvaEstado(){
        return new Estado(new Contrato($this->nomeCliente,$this->data,$this->tipo));
    }
    
}
