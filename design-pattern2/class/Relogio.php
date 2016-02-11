<?php

class Relogio implements IData{
    
    public function hoje(){
        echo date('d-m-Y');
    }
}