<?php

class EmAndamento implements ITipoDeContrato{
    public function avanca(Contrato $contrato){
        $contrato->setTipo(new Acertado);
    }
}