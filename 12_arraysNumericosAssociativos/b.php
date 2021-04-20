<?php
# Sempre que quisermos mostrar um valor do array usaremos seu índice. Incluvive podemos mudar seu valor usando o mesmo índice.

$valores = [10, 20, 30];
$valores[1] = 2000; 

# podemos também adcionar um novo valor no array apenas indicando seu valor com isso ele vai assumir o último índice d array
$valores[] = 400; #$valores = [10, 200, 30, 400];

# outra forma de adiconar um valor
array_push($valores, 5000); # $valores = [10, 2000, 30, 400, 5000];

# para apresetar valores de array em uma string, podemos fazer da seguinte forma:
echo 'os valores são: '.$valores[0]. ' e '. $valores[1];
echo "\nOs valores são $valores[0] e $valores[1]";
