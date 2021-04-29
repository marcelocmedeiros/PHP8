<?php

# Para herda uma classe a partir de outra, usamos a expressão extends
class Animais{
    public $especie;
    public $peso;

    function tipoEspecie(){
        return "Este animal é da espécie {$this->especie}";
    }
}


class Mamifero extends Animais{
    // não é necessario definir as propriedades e métodos que já existem na classe pai(base)

    // prodemos acrecentar outra propriedades e métodos 
    public $quantidade_pernas;
    public $tem_pelo;

    function temQuantasPernas(){
        return "O animal da espécie {$this->especie} tem {$this->quantidade_pernas}";
    }
}

$mamifero = new Mamifero();
$mamifero -> especie = "Cavalo";
$mamifero -> quantidade_pernas = 4;
echo $mamifero-> temQuantasPernas();