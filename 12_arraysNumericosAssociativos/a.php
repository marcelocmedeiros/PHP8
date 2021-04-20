<?php

# Arrays

# Um arrays (é uma matriz em PT), na realidade uma coleção de valores.
# Funciona como uma variável, mas que pode conter muitos valores "arrumados" cada um o seu espaço. Esse espaço é designado por um índice do array.

# Um array é uma coleção de chaves/índices e valores.
# Arrays númericos => possui uma coleção de valores númericos.
# Arrays associativos => possui uma coleção de strings.
# Podem existir arrays de valores númericos e strings ao mesmo tempo.
# Podem incluvise existir outros arrays dentro de um array.

$numerico= array(1, 2, 3, 4, 5, 6);
$associativo = array('ana', 'maria', 'pedro');

# form simplificada
$misto = [1, 2, 3, 'ana', 'maria'];
$arrays = [1, 2, ['ana', 'rui'], 'sol', 34];

# Estes arrays são de índices muméricos.
# Para apresentar um dos seus valores, procedemos da seguinte forma:
echo $numerico[0];
echo $associativo[2];

# Nunca esquecer que os arrays têm índices que começam com o zero.
# Não tem obrigatoriedade de ter chaves sequenciais

$dados = [
    10 => 1000,
    20 => 2000,
    30 => 3000
];

# se adiconarmos um novo elemento no final da coleçã, ele vai assumir o último índice +1
$dados[] = 4000; #dados[31];