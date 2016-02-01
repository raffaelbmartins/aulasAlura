<?php

require 'AutoLoader.php';

$factory = new ConnectionFactory();
$conexao = $factory->getConnection();

var_dump($conexao);