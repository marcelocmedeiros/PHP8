<?php

# Access Levels - Níveis de Acesso.

# Existem 3 níveis de acesso a elementos dentro de uma classe public, protected e private

class MinhaClasse{
    public $v1;
    protected $v2;
    private $v3;
}

$a = new MinhaClasse();

$a-> v1 = '111';
$a-> v2 = '222';
$a-> v3 = '333';

# Porquê?

# Itens declarados como públicos podem ser acessados de qualquer lugar
# declarados como protegidos só podem ser acessados na classe declarante e suas classes herdeiras. 
# declarados como privados só podem ser acessados na classe que define o membro privado.

class TudoPublico{
    public $propriedade;
    public function metodo(){
        echo 'Médoto público';
    }
}

$obj = new TudoPublico();
$obj->propriedade = "a";
$obj->metodo();

# Métodos sem qualquer declaração explícita serão definidos como público.

