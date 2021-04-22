<?php
/*O foreach funciona somente em arrays e objetos, e emitirá um erro ao tentar usá-lo em uma variável com um tipo de dado diferente ou em uma variável não inicializada.
Possui duas sintaxes:

foreach (array_expression as $valor)
    código
foreach (array_expression as $chave(índice) => $valor)
    código
*/
$num = [1, 2, 3, 4];
foreach ($num as $valor) {    
    echo $valor, "\n";
}

$num = [1, 2, 3, 4];
foreach ($num as $key => $value) {
    // $arr[3] será atualizado com cada valor de $arr...
    echo "{$key} => {$value} \n";    
}