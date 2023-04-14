<?php

class Animal
{

    public $nome;
    
    function nomes($nome)
    {
        $this->nome = $nome;
    }
    function latir(){
        echo "latir";
    }
}

$animal = new Animal;

echo "o nome do animal é $animal->nome <br>";

$animal->nomes("Teste");
$animal->latir();
