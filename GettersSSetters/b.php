<?php


class Humano2{

    private $idade = 0;

    public function setIdade($valor){
        if(is_numeric($valor)){
            $this -> idade = $valor;
        }
    }
    public function getIdade(){
        return $this -> idade;
    }
}
$eu2 = new Humano2();
$eu2 -> setIdade(45);
echo $eu2 -> getIdade();
