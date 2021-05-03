<?php

class Operacoes{

    static $valor1;
    static $valor2;

    static function adicionar(){
        return self::$valor1 + self::$valor2;
        // return Operacoes::$valor1 + Operacoes::$valor2;
    }
}

Operacoes::$valor1 = 10;
Operacoes::$valor2 = 20;
echo Operacoes::adicionar();