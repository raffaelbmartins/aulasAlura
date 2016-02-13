<?php

class EnviadorDeEmail implements IAcoesAposGerarNotaFiscal {

    public function executa(NotaFiscal $nf) {
         echo "email enviado<br>";
    }
}