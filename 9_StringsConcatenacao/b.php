<?php

# Concatenação de Strings 
# É o processo que, através do código, permite juntar várias strings
# Exitem dois operadores de conctenação;

# .
# .=

$a = 'Marcelo'. ' '. 'Campos'; # o ponto liga as diferentes strings
echo $a;


$b = ' Marcelo';
$b .= ' '.'Campos'; # .= faz uma concatenação com o valor já existente na string
echo $b;

#die(); #isso mata o código neste ponto
echo ' ';
$c = 'Marcelo';
$d = ' Campos';
$nome = $c . $d;
echo $nome;
#die();

# a diferença entre string delimitada por aspas simples ' e por aspas duplas " é que, no segundo caso, ela interpreta variáveis.

$nome = 'Marcelo';
$apelido = ' Campos';
$completo = "$nome $apelido";
$completo = '$nome $apelido'; # não lê o valor da variável
echo $completo;