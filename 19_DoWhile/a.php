<?php

/*
=> Do-while é muito similar aos laços while, com exceção que a expressão de avaliação é verificada ao final de cada iteração em vez de no começo.

=> Diferença para o laço while é que a primeira iteração do laço do-while sempre é executada (a expressão de avaliação é executada somente no final da iteração)
*/
$i = 0;
do {
    echo $i, "\n";
} while ($i > 0); // executa uma única vez
// quando tivermos só uma instrução dentro do laço pode-se deixar de usar as {}

// $i = 0;
// do
//     echo $i++, "\n";
// while ($i < 5); 