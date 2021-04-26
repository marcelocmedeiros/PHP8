<?php
/* 
Informações podem ser passadas para funções através da lista de argumentos, que é uma lista de expressões delimitados por vírgulas. Os argumentos são avaliados da esquerda para a direita.
*/
// passados por referência => Por padrão, argumentos de função são passados por valor (de forma que se você mudar o valor do parâmetro dentro da função, ele não é alterado fora da função). Para permitir que uma função modifique os seus argumentos, eles devem ser passados por referência.

function add_some_extra(&$string)
{
    $string .= ' e alguma coisa mais.';
}
$str = 'Isto é uma string,';
add_some_extra($str);
echo $str,"\n\n";    // imprime 'Isto é uma string, e alguma coisa mais.'
// Valores padrão de argumentos => Uma função pode definir valores padrão no estilo C++ para argumentos escalares

function makecoffee($type = "cappuccino")
{
    return "Fazendo uma xícara de café $type.\n";
}
echo makecoffee();
echo makecoffee(null);
echo makecoffee("espresso");