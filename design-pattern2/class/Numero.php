<?php

class Numero implements IExpressao{
    
    private $numero;
    
    function __construct($numero) {
        $this->numero = $numero;
    }
    
    public function getNumero(){
        return $this->numero;    
    }
    
    public function avalia(){
        return $this->numero;
    }
    
    public function aceita(Visitor $visitor){
        $visitor->visitaNumero($this);
    }
}