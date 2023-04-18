<?php

trait Objeto {

    public $x = "walef";

    public function teste(){
        echo "teste ";

    }
}

class Teste {
    use Objeto;

}

$objeto = new Teste;

echo $objeto->teste();
echo $objeto->x;