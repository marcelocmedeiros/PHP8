<?php
/*
=> dentro de uma função, a declaração return terminará imediatamente sua execução
=> retorna o controle do programa para o módulo que o chamou

função termine sua execução imediatamente e passa o controle de volta para a linha de onde ela foi chamada. 
*/
function falar()
{
   return;
   echo 'Não vai ser apresetado'; // não será apresentado pq return termina a função quando é chamado e retorna para local que foi chamada a função 
}

# Podemos usar o return para devolver um valor.

function adicionar($a, $b){
    $resultado = $a + $b;
    return $resultado;
}


echo adicionar(4,8);

# Outro exemplo 
$nome = 'Marcelo';
if(avaliar_nome($nome)){
    echo 'O cliente está correto.';
}

function avaliar_nome($n)
{
    if($n == 'Marcelo') {
        return true;
    } else {
        return false;
    }
    
}

# Uma função sem qualquer valor de retorno, devolve sempre um valor null
function teste()
{
    # Se return for omitido então o valor null será retornado.
}
if (teste()=== null) {
    echo 'Função com retorno igual a nulo.';
}