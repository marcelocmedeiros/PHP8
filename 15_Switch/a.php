<?php

# SWITCH  é uma alternativa ao IF

$nome = 'Marcelo';
switch ($nome) {
    case 'Luiz':
        echo 'Luiz';
        break;
    case 'Rui':
        echo 'Rui';
        break;
    case 'Marcelo':
        echo 'Aqui está você';
        break;
    default:
        echo 'Não encontrei...';
        break;
}