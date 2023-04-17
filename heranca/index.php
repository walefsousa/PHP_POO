<?php

use Humano as GlobalHumano;
use Programador as GlobalProgramador;

class Humano {
    
    public $idade = 29;

    public function Falar(){
        echo "Olá mundo";
    }
    private function gritar(){
        echo "CURSO PHP";
    }

    public function acessaGritar(){
        $this->gritar();
    }

    protected function falarBaixo(){
        echo "curso php...... ";
    }

    public function falarbaixinho(){
        $this->falarBaixo();
    }
}
class Programador extends Humano {


}

$pessoa = new Humano;

$walef = new Programador;

echo $pessoa->Falar() . $pessoa->acessaGritar();

echo $walef->Falar() . " " . $walef->idade . " " . $walef->falarbaixinho();