<?php

require 'AutoLoader.php';

$contrato = new Contrato('Raffael',date('Y-m-d'));
$historico = new Historico;
$historico->setEstado($contrato->salvaEstado());

echo '<pre>';

var_dump($contrato);

sleep(4);

$contrato->avanca();
$historico->setEstado($contrato->salvaEstado());

var_dump($contrato);

sleep(2);

$contrato->avanca();
$historico->setEstado($contrato->salvaEstado());

var_dump($contrato);

sleep(3);

$contrato->avanca();
$historico->setEstado($contrato->salvaEstado());

var_dump($contrato);

echo "<hr>";

var_dump($historico);

echo "<hr>";
echo "<h1> Restaurando o Contrato para \"Acertado\" </h1>";
$contrato->restaura($historico->getEstado(2));

var_dump($contrato);



