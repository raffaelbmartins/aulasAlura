<?php

require 'AutoLoader.php';

//Aula 01 - Coesao
echo '<h1> COESAO </h1>';
echo '<hr />';

// $cargo = new Desenvolvedor(new DezOuVintePorCento());

// $funcionario = new Funcionario($cargo,2000);
// $funcionario->setId(1);
// $funcionario->setNome("Raffael");
// $funcionario->setDataAdmisao(new DateTime("now"));

// $calculadora = new CalculadoraDeSalario();

// echo $calculadora->calcula($funcionario);

//Aula 02 - Acomplamento
echo '<br><h1> ACOPLAMENTO </h1>';
echo '<hr />';

$fatura = new Fatura(200);
$geraNotaFiscal = new GeradorNotaFiscal;
$geraNotaFiscal->addAcao(new EnviadorDeEmail);
$geraNotaFiscal->addAcao(new NotaFiscalDao);

$geraNotaFiscal->gera($fatura);


