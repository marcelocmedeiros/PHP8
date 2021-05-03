<?php

# uma boa prática é criar  o menor número de propriedades de uma classe como públicas.
# colocar um propriedade como publica é expor em demassia essa propriedade.

class Humano{
    public $idade;
}

$eu = new Humano();
$eu -> idade = 'Olá Mundo!';

class HUmano1{
    private $idade;
}

$eu1 -> idade = "Marcelo";