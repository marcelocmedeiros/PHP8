<?php

// VARIÁVEIS

# São usadas para guardas dados: números, textos, etc.
# Podemos apresentar e modificar os seus valores ao longo do código

# Definem-se com um dollar($) e um identificador (nome da variável)
//$variavel; 
# No final coloca-se ;

# podemos definir e iniciar uma variável
//$variavel = 100;

# Podemos alterar o tipo de valores de uma variável
//$variavel = "teste";
# o que caracteriza o PHP como uma linguagem fracamente tipada 

# as variáveis são case sensitive
// $variavel = "uma variavel";
// $Variavel = "outra variavel";

# Não se pode começa uma variável:
//$1var = 0; //por um número
//$!var = 0; //por um sinal
//$var(2) = 0; //não pode ter parenteses 
//$var um = 0; // não pode ter espaços
//$var-um = 0; // não pode ter hifen


# Como começar uma variável
//$variavel = 0; //por uma letra(maiúscula ou minúscula)
//$var1 = 0; //depois de uma letra ou underscore pode ter números
//$_var= 0; //pode começar por underscore
//$varUm = 0; // pode conter letras maiúsculas e minúsculas
//$_10 = 0; // pode tmb ser assim

# convenções 
$umaVariavel = 0; # camel case
$uma_variavel = 0; # snake case (com underscore)
$UmaVariavel = 0; # studly case (não recomendado)

# deve ser sempre mantido o mesmo estilo ao longo do projeto