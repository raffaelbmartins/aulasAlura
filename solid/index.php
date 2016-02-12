<?php

require 'AutoLoader.php';

$cargo = new Desenvolvedor(new DezOuVintePorCento());

$funcionario = new Funcionario($cargo,2000);
$funcionario->setId(1);
$funcionario->setNome("Raffael");
$funcionario->setDataAdmisao(new DateTime("now"));

$calculadora = new CalculadoraDeSalario();

echo $calculadora->calcula($funcionario);

