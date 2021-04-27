<?php
/**
 * Instancia um objeto é criar uma variável a partir d euma classe.
 * Instanciar um objeto significa criar um objeto a partir de uma classe atribuindo a variável a expressão new e o nome da classe.
 * Os objetos podem ser instanciados mesmo se adefinição da classe aparecer depois ou abaixo no script
 */

class Humano{
    public $nome = 'Marcelo';
    public $sobrenome = 'Medeiros';

    public function nomeCompleto(){
        return $this -> nome. ' '.$this ->sobrenome;
    }
}
$homem = new Humano();

echo $homem -> nomeCompleto();
