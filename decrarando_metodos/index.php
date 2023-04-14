<?php

class Pessoa{

    function falar($a, $b){
        echo "o Resultado é: " . $a + $b . "<br>";
    }

}

$walef = new Pessoa;
$pessoa = new Pessoa;

$walef->falar(5,5);
$pessoa->falar(6,6);
