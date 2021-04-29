<?php
/**
 * Este sistema também é aplicado às propriedades.
 */
class Animal{
    public $especie = 'Ave';
}

class Mamifero extends Animal{
    public $especie = 'Cavalo';

}


$animal = new Animal();
echo $animal->especie;
echo "\n";

$mamifero = new Mamifero();
echo $mamifero  -> especie;

