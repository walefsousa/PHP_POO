<?php

abstract class Teste{
    
    public static function teste(){
        echo "testando.....";
    }

    abstract public function testeABS();

}

Teste::teste(); //só pode chamar a funcão se ela for estatica

class Nova extends Teste {
    public function testeABS(){
        echo "testando o metodo abstrado herdado.";
    }

}

$nova = new Nova;

echo $nova->testeABS();