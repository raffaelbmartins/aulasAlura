<?php

require '../AutoLoader.php';


$soma = new Soma(new Numero(4), new Numero(5));
$subtracao = new Subtracao(new Numero(4), new Numero(2));
$multiplicacao = new Multiplicacao(new Numero(4), new Numero(2));
$divisao = new Divisao(new Numero(4), new Numero(2));
$raiz = new RaizQuadrada($soma);

echo 'Soma [ ' . $soma->avalia() . ' ]<br>';
echo 'Subtração [ ' . $subtracao->avalia() . ' ]<br>';
echo 'Multiplicação [ ' . $multiplicacao->avalia() . ' ]<br>';
echo 'Divisão [ ' . $divisao->avalia() . ' ]<br>';
echo 'Raiz Quadrada da Soma [ ' . $raiz->avalia() . ' ]<br>';
