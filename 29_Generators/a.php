<?php
/**
 * Um generator permite que você escreva código que use foreach para iterar em um conjunto de dados sem precisar construir um array em memória, o que pode fazer com que o limite de memória seja ultrapassado ou exigir uma quantidade considerável de tempo de processamento para a geração. 
 * Uma função generator, que é o mesmo que uma função normal, exceto que ao invés do retorno ocorrer única vez, um generator pode entregar o resultado quantas vezes forem necessárias para permitir que os valores sejam iterados.
 *  Permite gerar uma serie de valores
 * O coração de uma função generator é a palavra chave yield.
 * O valor é devolvido pela função na instrução yield
 * yield guarda o estado da função permitindo que ela continue a partir do seu estado onde ficou na última chamada
 */
function buscar_numero(){
    for ($i=0; $i < 10; $i++) { 
        yield $i;        
    }
}

foreach (buscar_numero() as $numero) {
    echo "$numero ";
}

function buscar_nome(){
    yield 'joão';
    yield 'maria';
    yield from ['rui', 'ana', 'bia'];
    yield 'Max';
}
foreach (buscar_nome() as $nome) {
   echo "$nome \n";
}