<?php

# Operadores Lógicos 
# Os operadores lógicos são frequentemente usados com os operadores de compração
# Eles permitem 'ligar' várias coparações avaliando se são verdadeiras ou falsas

# No PHP a cosntrução correta de instruções condicionais dependem destes operadores 
# Instruções condicionais verificam se uma situação é verdadeira(true) ou falsa(false)

$a = 100;
$b = 200;
$x = ($a < $b) && ($a < 1000); # AND -> true
# && (AND) => só será verdadeiro se todos forem verdade.
$x = ($a > $b) || ($a > 1000); # OR -> false
# || (OR) => só será falso se todos forem falsos