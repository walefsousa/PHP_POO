<?php

class Car {

    public $portas;
    public $cor;
    public $marca;

    function __construct($portas, $cor, $marca){
        $this->portas = $portas;
        $this->cor = $cor;
        $this->marca = $marca;
                
    }

}

$ferrari =  new Car(4, "Vermelho", "Ferrari");

echo $ferrari->portas . " " . $ferrari->cor . " " . $ferrari->marca;