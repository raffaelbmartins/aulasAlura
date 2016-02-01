<?php

class ConectionFactory {
    public function getConection(){
        
        $host  = 'localhost';
        $db    = 'bdalura';
        $user  = 'root';
        $senha = '123';
        
        $con = mysqli_conect($host,$user,$pass,$db);
        
        return $con;
    }
}

