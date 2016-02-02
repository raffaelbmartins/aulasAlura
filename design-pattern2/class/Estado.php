<?php

class Estado {
    
    private $contrato;
    private $dataHora;
    
    function __construct(Contrato $contrato){
        $this->cotrato = $contrato;
        $this->dataHora = date('Y-m-d h:i:s');
    }
    
    public function getEstado(){
        return $this->contrato;
    }
    
}
