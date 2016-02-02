<?php

class Numero implements IExpressao{
    
    private $numero;
    
    function __construct($numero) {
        $this->numero = $numero;
    }
    
    public function avalia(){
        return $this->numero;
    }
}