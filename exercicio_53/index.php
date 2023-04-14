<?php

class Cachorro{

    function latir(){
        echo "o cahorro latil au au<br>";   
    }
    function andar($m){
        echo "o Cachorro andou $m <br>";
    }

}

$cachorro1 = new Cachorro;
$cachorro2 = new Cachorro;

$cachorro1->latir();
$cachorro2->andar(20);


