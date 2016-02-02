<?php

class Estado {
    
    private $contrato;
    private $dataHora;
    
    function __construct(Contrato $contrato){
        $this->contrato = $contrato;
        $this->dataHora = date('Y-m-d h:i:s');
    }
    
    public function getEstado(){
        return $this->contrato;
    }
    
}
