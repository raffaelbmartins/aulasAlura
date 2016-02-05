<?php

class Divisao implements IExpressao{

    private $esquerda;
    private $direita;

    function __construct(IExpressao $esquerda, IExpressao $direita) {
        $this->esquerda = $esquerda;
        $this->direita = $direita;
    }
    
    public function getEsquerda(){
        return $this->esquerda;
    }
    
    public function getDireita(){
        return $this->direita;
    }
    
    public function avalia(){
        $resultEsquerda = $this->esquerda->avalia();
        $resultDireita = $this->direita->avalia();
        return $resultEsquerda / $resultDireita;
    }
    
    public function aceita(Visitor $visitor){
        $visitor->visitaDivisao($this);
    }
}