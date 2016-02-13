<?php

class GeradorNotaFiscal {

    private $acoes;

    public function __construct() {
        $this->acoes = array();
    }

    public function addAcao(IAcoesAposGerarNotaFiscal $acao){
    	$this->acoes[] = $acao;
    }

    private function executaAcoes(NotaFiscal $nf){
    	foreach($this->acoes as $acao):
    		$acao->executa($nf);
		endforeach;
    }

    public function gera(Fatura $fatura) {

        $valor = $fatura->getValorMensal();

        $nf = new NotaFiscal($valor,$this->impostoSobreValor($valor));

        $this->executaAcoes($nf);
    }

    private function impostoSobreValor($valor) {
        return $valor * 0.06;
    }

}