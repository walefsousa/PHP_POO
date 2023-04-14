<?php

class Humano {

    public const olhos = 2;
    public const braços = 2;
    public const pernas = 2;

    function mostrar(){
        
        echo self::braços . "<br>";

    }

}

$pessoa = new Humano;

echo $pessoa::olhos . "<br>";

$pessoa->mostrar();