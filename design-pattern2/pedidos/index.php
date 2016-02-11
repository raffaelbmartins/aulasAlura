<?php

require '../AutoLoader.php';

$pedido1 = new Pedido("Raffael",200);
$pedido2 = new Pedido("Renan",400);

$fila = new FilaDeExecucao;

$fila->adiciona(new PagaPedido($pedido1));
$fila->adiciona(new PagaPedido($pedido2));
$fila->adiciona(new ConcluiPedido($pedido1));

$fila->processa();

var_dump($pedido2);