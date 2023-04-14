<?php

class Carro{
    public $velocidade_maxima;
    public $cor;
    public $modelo;

    function setVelocidadeMaxima($vel){
        $this->velocidade_maxima = $vel;
    }
    function getVelocidadeMaxima(){
        echo "a velocidade maxima é: $this->velocidade_maxima";
    }
}

$bmw = new Carro();

$bmw->setVelocidadeMaxima(200);
$bmw->getVelocidadeMaxima();