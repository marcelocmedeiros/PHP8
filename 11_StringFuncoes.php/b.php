<?php

# Podemos comprar strings:

$a = 'Marcelo';
$b = 'Macelo';

$c = ($a == $b); # false
$d = ($a != $b); # true

# conta o número de caracteres

$total = strlen($a);
echo $total;

# fatia a string

$fatia= substr($a, 0, 3);
echo $fatia;

# converte tota a string em maiúscula
$maiusc = strtoupper($a);
echo $maiusc;

# converte tota a string em mainúscula
$minusc = strtolower($a);
echo $minusc;

# substitui uma letra por outra
$substitui = str_replace('a', '@', $a);
echo $substitui;

# verifica qual a posição da letra dentro da string
$posicao = strpos($a, 'c');
echo $posicao;