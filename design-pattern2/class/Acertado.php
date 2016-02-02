<?php

class Acertado implements ITipoDeContrato{
    public function avanca(Contrato $contrato){
        $contrato->setTipo(new Concluido);
    }
}