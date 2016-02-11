<?php

class FilaDeExecucao{
    
    private $listaComandos;
    
    function __construct(){
        $this->listaComandos = array();
    }
    
    public function adiciona(IComando $comando){
        $this->listaComandos[] = ($comando);
    }
    
    public function processa(){
        foreach($this->listaComandos as $comando):
            $comando->executa();
        endforeach;
    }
    
}