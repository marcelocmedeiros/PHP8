<?php

# arrays assosciativos

# as chaves são do tipo string

$dados = [
    'A'=> 20,
    'B'=> 30,
    'C'=> 40,
    'D'=> 50,
    'E'=> 60
];
# ou

$dados = [
    'nome'=> 'joão',
    'email'=> 'joao@gmail.com',
    'telefone'=> '9999999'
];

# Nos arrays não devem existir duas chaves com mesmo valor. Pois só o array vai assumir apenas o último valor a ele associado.
$valor = [
    'nome'=> 'Ana',
    'nome' => 'Maria'
];
echo $valor['nome'];
