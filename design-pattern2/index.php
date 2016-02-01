<?php

require 'AutoLoader.php';

$factory = new ConectionFactory();
$conexao = $factory->getConection();

var_dump($conexao);