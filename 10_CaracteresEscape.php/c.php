<?php

# No PHP 7 foi introduzido o caractere de escape Unicode. Que permite apresetar caracteres a partir do seu código hexadecimal

echo "\u{A9}\n";
echo "\u{BC}\n";
echo "\u{AE}";

# com HTML entities

echo '<br>';
echo '&copy';
echo '&frac14';
echo '&reg';