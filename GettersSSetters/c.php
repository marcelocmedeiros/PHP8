<?php

class Tempo{

    private $segundos;

    public function setSegundos($valor)
    {
        if (!is_numeric($valor) || $valor < 0) {
            $this-> segundos = 0;
        } else{
            $this -> seungods = $valor;
        }
    }
    public function getMinutos()
    {
        return $this->segundos/60;
    }

    public function setMinutos($valor)
    {
        if ($valor == 0) {
            $this -> segundos = 0;
        } else {
            $this -> segundos = $valor * 60;
        }
        
    }
}

$