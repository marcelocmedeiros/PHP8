<?php
/*
=> break finaliza a execução da estrutura for, foreach, while, do-while ou switch atual.

break aceita um argumento numérico opcional que diz quantas estruturas aninhadas deverá interromper. O valor padrão é 1, somente a estrutura imediata é interrompida.

=> continue é utilizado em estruturas de laço para pular o resto da iteração atual, e continuar a execução na validação da condição e, então, iniciar a próxima iteração.

O continue aceita um argumento numérico opcional que diz quantos níveis de laços aninhados deve pular. O valor padrão é 1, saltando para o final do laço atual.

=> O operador goto pode ser usado para pular para outra seção do programa. O ponto de destino é definido por um rótulo seguido de dois pontos, e a instrução é usada como goto seguida do rótulo de destino desejado. 
*/
/* Exemplo Break */
$arr = array('one', 'two', 'three', 'four', 'stop', 'five');
foreach ($arr as $val) {
    if ($val == 'stop') {
        break;    
    }
    echo "$val\n";
}
/* Exemplo Continue */
for ($i = 0; $i < 5; ++$i) {
    if ($i == 2){
        continue;
    }        
    echo $i,"\n";
}
/* Exemplo de GOTO */

goto a;
echo 'Foo';

a:
echo 'Bar';

for ($i=0; $i < 10; $i++) { 
    if ($i == 5) {
        goto teste;
    }
    echo $i."\n";
}
echo 'fim do loop';
teste:
echo 'Aqui!!!';