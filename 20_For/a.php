<?php
/*
Loop For é usado quando temos conhecimento de quantas vezes queremos o seu ciclo
sintaxe:
for( inicializa; teste_condicional; modificador){
  codigo;
*/

for ($i=0; $i < 10; $i++) { 
    echo $i, "\n";
}

for ($i= 10; $i > 0; $i--) { 
    echo $i, "\n";
}

$nomes = ['ana', 'rui', 'bia'];
for ($i=0; $i < sizeof($nomes); $i++) { 
    echo $nomes[$i]."\n";
}