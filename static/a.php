<?php

/**
 * Declarar propriedades ou métodos de uma classe como estáticos faz deles acessíveis sem a necessidade de instanciar a classe. 
 * m membro declarados como estático não pode ser acessado com um objeto instanciado da classe (embora métodos estáticos podem).
 *  a pseudo-variável $this não está disponível dentro de um método declarado como estático.
 * Propriedades estáticas não podem ser acessadas através do operador ->.
 * Static é uma palavra que pode ser usada para declarar propriedades e métodos de uma classe que podem ser acedidos sem que seja necessário cria um objeto a partir dessa classe.
 * 
 */

 class Teste{

    public $nome;
    function teste(){

    }
    // static apenas existem uma vez na classe
    static $idade;
    static function mover(){

    }
 }