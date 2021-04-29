<?php
/**
 * Overriding => reeecrever 
 * Permite a uma classe derivada ter métodos reescritos especificos para essa classe
 * Ex: ter um método Teste na classe pai e outro na classe filha sendo que na filha esse método é diferente do da classe pai
 */
class Animal{
    public function mover()
    {
        echo 'Mover a partir da classe base';
    }
}

class Mamifero extends Animal{

}
class Peixe extends Animal{
    public function mover() 
    {
        echo 'Mover a partir da classe peixe';
    }

}

$animal = new Animal();
echo $animal->mover();
echo "\n";

$peixe = new Peixe();
echo $peixe -> mover();

