<?php

use Humano as GlobalHumano;

/**
 * É um metodo especial dentos de uma classe que é sempre executado automaticamente quando é criado um objeto a partir de uma classe. Este método é definodo d euma forma especial com __(dois underscores). São chamados métodos mágicos pq têm uma execução especifica ou automática associda.
 */
class Humano{
    private $nome;
    private $apelido;

    function __construct($n, $a){
        $this -> nome = $n;
        $this -> apelido = $a;
    }
    public function nomeCompleto(){
        return $this -> nome. " ". $this->apelido;
    }        
}

$homem = new Humano('Marcelo', 'Medeiros');
$mulher = new Humano('Marcela', 'Medeiros');
echo $homem -> nomeCompleto();
echo "\n";
echo $mulher -> nomeCompleto();