<?php

class Cachorro {

    public $raca;
    public $cor;
    public $peso;

    function __construct($raca, $cor, $peso){
        $this->raca = $raca;
        $this->cor = $cor;
        $this->peso = $peso;
                
    }

    public function exibir(){
        echo $this->raca . " " . $this->cor . " " . $this->peso ." Kg";
    }

}

$cachorro =  new Cachorro("Pitbull", "Preto", 4.15);

echo $cachorro->exibir();
