<?php

require 'AutoLoader.php';

//Bridge
$mapa = new GoogleMaps;
$mapa->exibirMapa();

echo '<hr />';

//Adapter
$relogio = new Relogio();
$relogio->hoje();