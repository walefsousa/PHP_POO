<?php

interface Caracteristicas{
  
    const nome = "Walef";
    public function falar();

}

Class Humano implements Caracteristicas {
    
    public $idade = 29;
    
    public function falar(){
        
        echo "Olá mundo";
    }
    public function dizerNome(){

        echo "Meu nome é" .  self::nome . " ";
    }
}

$walef = new Humano;

