<?php

class Concluido implements ITipoDeContrato{
    public function avanca(Contrato $contrato){
        throw new Exception("O contrato se encontra Concluido");
    }
}