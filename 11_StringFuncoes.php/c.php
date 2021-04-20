<?php

# PHP 8 foram introduzidas algumas funções

# str_contains()
$nome = "Marcelo Campos";
$x = str_contains($nome, 'Campos'); # true

# str_starts_with()
$x = str_starts_with($nome, 'Marcelo'); # true
$x = str_starts_with($nome, 'marcelo'); # false

#str_ends_with()
$x = str_starts_with($nome, 'lo'); # true
$x = str_starts_with($nome, 'Lo'); # false