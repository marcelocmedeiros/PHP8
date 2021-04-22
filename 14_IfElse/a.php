<?php
# IF

$nome = 'Marcelo';
if ($nome == 'Marcelo') {
    echo 'Esta condição foi verdadeira';
}

# IF ... ELSE

$idade = 18;
if ($idade < 18) {
    echo 'Adolecente';
} else {
    echo 'Adulto';
}

# IF... ELSEIF... ELSE
$nota = 5;
if ($nota <= 2) {
    echo 'Nota Fraca';
}
elseif ($nota <= 4) {
    echo 'Nota insuficiente';
}
elseif ($nota <= 6) {
    echo 'Nota positiva';
}
elseif ($nota <= 8) {
    echo 'Nota muito Positiva';
}
else {
    echo 'Nota excelente';
}

# podemos deixar de usar as chaves se existir apenas uma linha de código
