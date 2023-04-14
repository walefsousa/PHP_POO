<?php

class Pessoa{

    public $nome;
    public $idade;

    function andar($m){
        echo $m;
    }
}

$pessoa = new Pessoa;

$pessoa->nome = "Walef";
$pessoa->idade = 29;

echo "A pessoa $pessoa->nome com $pessoa->idade anos, andou ";
$pessoa->andar(4); 
echo " Km";