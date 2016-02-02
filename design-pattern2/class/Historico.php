<?php

class Historico {
    
    private $estadosSalvos;
    
    function __construct(){
        $this->estadosSalvos = array();
    }
    
    public function getEstado($index){
        return $this->estadosSalvos[$index];
    }
    
    public function setEstado(Estado $estado){
        $this->estadosSalvos[] = $estado;
    }
}
