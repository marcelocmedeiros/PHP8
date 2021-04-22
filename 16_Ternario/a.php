<?php

# É um operador condicional que pode substituir uma estrutura simple IF ELSE
# Sintexe expressão ? 'verdadeira' : 'Falsa'

$opcao = 0;

$nome = $opcao == 1 ? 'João': 'Marcelo';
echo $nome;

$nome = $opcao == 0 ? 'Dev': 'Marcelo';
echo $nome;