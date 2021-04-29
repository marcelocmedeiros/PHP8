<?php

class Retangulo{
    public $largura, $altura;
    function __construct($l, $a)
    {
        $this->largura = $l;
        $this->altura = $a;
    }
    public function calculaAre()
    {
        return $this->largura * $this->altura;
    }
}

class Quadrado extends Retangulo{
    public function __construct($l) {
        $this->largura = $l;
        $this->altura= $l;
    }
}

$retangulo = new Retangulo(10, 20);
$quadrado = new Quadrado(10);

echo $retangulo->calculaAre();
echo "\n";
echo $quadrado->calculaAre();

# mas podemos chamar o construtor da class base usando a expressão parent

class Quadrado1 extends Retangulo{
    public function __construct($l) {
        parent::__construct($l, $l);
    }
}

$quadrado = new Quadrado1(5);
echo "\n";
echo $quadrado-> calculaAre();

# A expressão parent é um nome alternativo ao nome da classa base
# Podemos também fazer da seguinte forma

class Quadrado2 extends Retangulo{
    public function __construct($l) {
        Retangulo::__construct($l, $l);
    }
}