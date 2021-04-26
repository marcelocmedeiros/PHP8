<?php
/**
 * São  do funções anônimas que podem usar variáveis do escopo global
 */

 $x = 10;
 $y = 20;
 $minhaClouse = function($z) use($x, $y){
     echo "$z- $x - $y";
     $y += 1000; # esta instrução não vai alterar o valor de $y
 };

 $minhaClouse(10);
 echo "\n$y";

 # Arrow Functions
 /**
  * introduzidos a partir do PHP 7.4 como uma sintaxe mais concisa para funções anônimas.
  *Funções anônimas e arrow functions são implementadas usando a classe Closure.
  * Arrow functions tem a forma básica fn (argument_list) => expr.
  * Arrow functions possuem a mesmas características das funções anônimas, exceto que o uso de variáveis do escopo pai é sempre automático.
  */
$y = 1;

$fn1 = fn($x) => $x + $y;
// equivalent to using $y by value:
$fn2 = function ($x) use ($y) {
    return $x + $y;
};

var_export($fn1(3));

$z = 1;
$fn = fn($x) => fn($y) => $x * $y + $z;
// Outputs 51
var_export($fn(5)(10));
