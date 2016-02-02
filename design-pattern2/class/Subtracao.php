<?php

class Subtracao implements IExpressao{
    
    private $esquerda;
    private $direita;

    function __construct(IExpressao $esquerda, IExpressao $direita) {
        $this->esquerda = $esquerda;
        $this->direita = $direita;
    }
    
    public function avalia(){
        $resultEsquerda = $this->esquerda->avalia();
        $resultDireita = $this->direita->avalia();
        return $resultEsquerda - $resultDireita;
    }
    
}