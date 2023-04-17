<?php

class Car{
    public $rodas = 4;
    private $vidros = "Sem pelicula";

    public function fabricaPelicula($pelicula){
       return $this->$pelicula;
    }

}

class Mecanico {

    public function alterandoRodas($carro){
        $carro->rodas = 10; 
    }

    public function colocarPelicula($carro, $pelicula){
        $carro->vidros = $pelicula;
    }

}    

$carro = new Car;

echo $carro->rodas;

$mecanica = new Mecanico;

echo $mecanica->alterandoRodas($carro);

echo $carro->rodas;

//echo $mecanica->colocarPelicula($carro, "G-20");

echo $carro->fabricaPelicula("G-20");