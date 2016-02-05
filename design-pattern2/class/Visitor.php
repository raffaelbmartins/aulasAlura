<?php

interface Visitor{
    
    public function visitaSoma(Soma $soma);
    
    public function visitaSubtracao(Subtracao $subtracao);
    
    public function visitaMultiplicacao(Multiplicacao $multiplicacao);
    
    public function visitaDivisao(Divisao $divisao);
    
    public function visitaNumero(Numero $numero);
    
}