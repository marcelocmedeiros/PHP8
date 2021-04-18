<?php

# HEREDOC e NOWDOC (outras formas de delimitação)
# Apesar de não serem muito comuns, podem ser usadas para tratamento de maiores blocos de texto.

# HEREDOC - Permite fazer o parse de variáveis

$clinte = 'Marcelo';
$email = 'marcelocm31@gmail.com';

$texto = <<<LABEL
Olá, sr. $clinte.
Você está inscrito no nosso curso e enviaremos seu comprovante por $email.
Obrigado.
LABEL;
echo $texto;

# NOWDOC - Não permite parse de variáveis sendo assim elas não seriam interpretadas conforme o exemplo acima.