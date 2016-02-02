<?php

class Novo implements ITipoDeContrato{
    public function avanca(Contrato $contrato){
        $contrato->setTipo(new EmAndamento);
    }
}