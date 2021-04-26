<?php

/**
 * O escopo de uma variável é o contexto onde foi definida. 
 * A maioria das variáveis do PHP tem somente escopo local.
 * No PHP, as variáveis globais precisam ser declaradas como globais dentro de uma função, se for utilizada em uma.
 */

$a = 1; /* escopo global */

function Teste()
{
    echo $a; /* referencia uma variável do escopo local (não definida) */
}

Teste();
# Este script não produz nenhuma saída porque a instrução echo refere-se a uma versão local da variável $a, e não possui nenhum valor atribuído neste escopo.

/* Global */

$a = 1;
$b = 2;

function Soma()
{
    global $a, $b;

    $b = $a + $b;
}

Soma();
echo $b;
# Não há um limite para o número de variáveis globais que podem ser manipuladas por uma função.

/** 
 * Uma segunda maneira de acessar variáveis do escopo global é utilizando o array especial $GLOBALS definido pelo PHP. 
 * O array $GLOBALS é um array associativo, sendo o nome da variável global a chave do array e o seu conteúdo da variável como o valor do elemento do array.
 * $GLOBALS existe em qualquer escopo, isto porque $GLOBALS é uma superglobal. 
 * */

$a = 1;
$b = 2;

function Soma()
{
    $GLOBALS['b'] = $GLOBALS['a'] + $GLOBALS['b'];
}

Soma();
echo $b;

/**
 * Uma variável estática existe somente no escopo local da função, mas não perde seu valor quando o nível de execução do programa deixa o escopo. 
 */

function Test()
{
    static $a = 0;
    echo $a;
    $a++;
}

# Agora, a variável $a é inicializada apenas na primeira chamada da função e cada vez que a função test() for chamada, imprimirá o valor de $a e depois o incrementará.
# Declarações estáticas são resolvida em tempo de compilação.

/**
 * Escopo de uma variável dentro de loops e condicionais não são destruidas dentro deste escopo
 */

 if (true){
     $a = 10;
 }
echo $a;

for ($i=0; $i < 10; $i++) { 
    $x = 1000;
}
echo $x;