<?php

# No PHP7 foi adicionado um novo operador de comparação
# Designado por spaceship operador (Tie Fighter do Star Wars)

#       <=>

$x = 1 <=> 1; # 0 (1 == 1)
$x = 3 <=> 1; # 1 (3 > 1)
$x = 1 <=> 3; # -1(1 < 3)