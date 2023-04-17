<?php

class Humano {

}

$nome = new Humano;

if($nome instanceof Humano){

    echo "Nome 1";
}else {
    echo "não é um nome"; 
}