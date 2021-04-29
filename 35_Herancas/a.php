<?php
/**
 * É o mecanismo através do qual podemos criar classes que herdam propriedades e métodos de outra classe
 * ao se estender uma classe, a subclasse herda todos os métodos públicos e protegidos da classe pai. 
 * 
 */

 class Animais{
     public $especie;
     public $peso;

     function tipoEspecie(){
         return "Este animal é da espécie {$this->especie}";
     }
 }

 $animmal = new Animais();
 $animmal -> especie = "Mamífero";

 echo $animmal -> tipoEspecie();
