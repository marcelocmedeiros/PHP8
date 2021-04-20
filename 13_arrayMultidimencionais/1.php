<?php

# Arrays Multidimencionais

# são arrays númericos ou associativos, cujos os valores são outros arrays

$dados =[
    [10,20,30],
    [100,200,300],
    [1000, 2000, 3000]
];

# neste caso, para apresetar-mos valroes deste arrays

echo $dados[1][2];
echo $dados[2][2];

# arrays associativos multidimencionais

$cidades =[
    'portugal'=>['lisboa', 'porto', 'coimbra'],
    'brasil'=>['são paulo', 'rio de janeiro', 'salvador']
];

echo $cidades['brasil'][1];
echo $cidades['portugal'][0];