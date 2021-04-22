<?php
/*
=> While dirá ao PHP para executar as declarações aninhadas repetidamente, enquanto a expressão do while forem avaliadas como true(verdadeira). 

=> Se a expressão do while for avaliada como false desde o início, as declarações aninhadas não serão executadas nenhuma vez.
*/

/* example 1 */

$i = 1;
while ($i <= 10) {
    echo $i++, "\n";  
}

$x = 1;

/* example 2 */

while($x <= 5) {
  echo "O número é: $x \n";
  $x++;
}

// $i = 0;
// while ($i < 10) echo $i++."\n";