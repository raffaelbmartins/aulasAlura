<?php

class RaizQuadrada implements IExpressao{

    private $expressao;

    function __construct(IExpressao $expressao) {
        $this->expressao = $expressao;
    }
    
    public function avalia(){
        $result = $this->expressao->avalia();
        return sqrt($result);
    }
}