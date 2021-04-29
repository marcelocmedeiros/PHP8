<?php
# antes do PHP8

use Humano1 as GlobalHumano1;

class Humano1{
    public $nome;
    public $apelido;

    function __construct($n, $a)
    {
        $this->nome = $n;
        $this->apelido = $a;
    }  
}
# depois do PHP8
class Humano2
{
    function __construct(public $nome, public $apelido) {
        $this->nome = $nome;
        $this->apelido = $apelido;
    }
}

$h1 = new Humano1('Marcelo', 'Campos');
$h2 = new Humano2('Marcelo', 'Medeiros');

echo $h1->nome.' '. $h1->apelido;
echo "\n";
echo $h2->nome.' '. $h2->apelido;
# IMPORTANTE: Ao contrário do nomedas variáveis, o nome das classes é case insencitive
$h3 = new humano1('nome','apelido');
echo "\n";
echo $h3->nome.' '. $h3->apelido;
