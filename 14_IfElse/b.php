<?php

# condições aninhadas

$num = 10;  
if ($num > 0) {
    if ($num >= 100) {
        echo 'O número é igual ou maior que 100';
    } else {
        echo 'O número é positivo, mas inferior a 100';
    }
    
} else {
    echo 'O número é negativo';
}
