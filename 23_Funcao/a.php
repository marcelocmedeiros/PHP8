<?php

/*
Uma função pode ser definida usando a seguinte sintaxe:

function foo ($arg_1, $arg_2,  ...,  $arg_n)
{
    echo "Exemplo de função.\n";
    return $valor_retornado;
}

Todas as funções e classes no PHP tem escopo global - elas podem ser chamadas fora de uma função mesmo que tenham sido definidas dentro e vice-versa.

O PHP não suporta sobrecarga de funções, e também não é possível cancelar ou alterar a definição de funções previamente declaradas.

Nomes de funções são case-insensitive,mas é melhor chamar as funções da mesma forma que elas aparecem nas declarações.
Nomes de funções camelCase() ou snake_cese()
*/
// Funções Recursivas
function recursion($a)
{
    if ($a < 20) {
        echo "$a\n";
        recursion($a + 1);
    }
}