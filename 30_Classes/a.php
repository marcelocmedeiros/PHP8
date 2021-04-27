<?php
/**
 * class => É uma forma/modelo/molde a partir do qual criamos objetos.
 * O nome de uma class deve ser sempre atrubuído naforam PascalCase(a primeira letra sempre maiúscula)
 * A definição de uma classe começa com a palavra chave class,
 * Uma classe pode conter suas próprias constantes, variáveis (chamadas de "propriedades") e funções (chamadas de "métodos").
 * A pseudo-variável $this está disponível quando um método é chamado a partir de um contexto de objeto.
 * new => Para criar uma instância de uma classe, a instrução new deve ser utilizada. 
 * Classes devem ser definidas antes de instanciadas
 * O corpo de uma class tem propriedades e métodos 
 * Propriedades - são variáveis que guardam as caracteristicas do objeto
 * Métodps são funções que definem o que o objeto pode fazer
 * As propriedades tmb são conhecidas como fields(campos) atributos de class
 * No PHP as propriedades têm que ter nível de acesso especificado
 */
$instance = new SimpleClass();

// Também pode ser feito com uma variável:
$className = 'SimpleClass';
$instance = new $className(); // new SimpleClass()

class FiguraGeometrica{
    public $largura, $altura;
    public $x;
    public $y;
    function novaArea($a, $b){
        return $a*$b;
    }
}