<?php

class Humano {
    
    public $idade = 29;
    public $altura = 1.70;
    public $peso = 80;

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
class Professor extends Humano {

}

$walef = new Humano;

$professor = new Professor;


echo $walef->Falar();
echo " " . $walef->idade . " " . $walef->altura . " " . $walef->peso;
echo "\n";
echo $professor->falarbaixinho();
echo " " . $professor->idade;

