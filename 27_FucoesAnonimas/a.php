<?php
/**
 * Funções anônimas, também conhecidas como closures, permitem a criação de funções que não tem o nome especificado. 
 * las são mais úteis como o valor de parâmetros callback, mas podem tem vários outros usos.
 * são implementadas utilizando a classe Closure
 * 
 */
$a = function(){
    echo 'olá!!!!';
};

# Após as chaves de fecho da função tem que surgir um ;
$a();

$falar = function($mensagem){
    echo "Eu digo: $mensagem";
};

$falar('Estou aqui!');

# outro exemplo
$andar = function($metros){
    return "Andei $metros metros";
};

echo $andar(100);

# Passando argumentos para uma função

$a = function(){
    return 'Função A';
};

function falar($x){
    echo $x;
}

falar($a());