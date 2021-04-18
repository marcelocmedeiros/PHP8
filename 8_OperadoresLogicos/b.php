<?php

# Operadores Lógicos

$x = (10 > 5) && (20 > 30);
#      true  &&    false = false
$x = (10 > 5) && (40 > 30);
#      true  &&   true = true
$x = (10 > 5) || (10 > 30);
#      true  ||   false = true
$x = (10< 5) || (10 > 30);
#      false  ||   false = false