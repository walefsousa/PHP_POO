<?php

class Teste {
    public $valor = 10;
    public $n = 50;

    function imprimir(){
        echo "testetstete";
    }

}

$teste = new Teste;

$teste->valor = "Novo valor da propriedade";

echo $teste->valor;
$teste->imprimir();