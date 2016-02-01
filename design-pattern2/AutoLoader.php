<?php

function autoLoader($nomeClasse){
    if( file_exists('class/' . $nomeClasse . '.php') ){
        require 'class/' . $nomeClasse . '.php';
    } else {
        echo '<h1>A pagina não pode ser carregada. Por favor tente novamente mais tarde.</h1>';
        exit(0);
    }
}

spl_autoload_register('autoLoader');