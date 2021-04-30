<?php
/** 
 * O uso da declaração de variável com a palavra-chave var ainda é suportada por razões de compatibilidade (como um sinônimo para a palavra-chave public). Em versões do PHP anteriores ao 5.1.3, isso gerará um aviso do tipo E_STRICT.
*/

class Humano{

    private $nome = 'x';

    function setPrivate($objeto, $valor){
        $objeto->nome = $valor;
    }

    function apresentar(){
        echo $this->nome;
    }
}
$a = new Humano();
$b = new Humano();
$a->setPrivate($b, 'Marcelo');

$a->apresentar();
echo"\n";
$b->apresentar();