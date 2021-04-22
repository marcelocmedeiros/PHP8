<?php

# Match é muito semelhante ao switch

$x = 10;
echo match($x){
    5 => 'parou no 5',
    10 => 'parou no 10',
    15 => 'parou no 15',
    default => 'É um número diferente de 5, 10 ou 15'
};

$x = 10;
echo match($x){
    2 => 'parou no 2',
    12, 13, 17 => ' é 12, 13 ou 17 ',
    15 => 'parou no 15',
    default => 'É outro valor'
};

# no Switch, as comparações podem ser feitas só por valor (==)
# no Match, as comparações são feitas só por valor e tipo(===)