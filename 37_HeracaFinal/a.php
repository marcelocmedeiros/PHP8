<?php

# Para impedir que uma classe derivada possa fazer override de métodos utilizamos a expressão FINAL da seguinte forma:

class Veiculo
{
    final function mover()
    {
    }
}

class Bicicleta extends Veiculo
{
    function mover()
    {
    }
}

# Inclusive podemos definir uma class como não sendo possível de ser herdada colocando FINAL antes de class

final class Humano{
    function teste(){
        echo 'teste';
    }
}

class Homem extends Humano{

}

$a = new Homem();
$a -> teste();