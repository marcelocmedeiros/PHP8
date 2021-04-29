<?php

# podemos ter classes sem qualquer tipo de método
# podemos ter classes sem qualquer tipo de propriedade
/**
 * A visibilidade de uma propriedade ou método pode ser definida prefixando a declaração com as palavras-chave: public, protected or private.
 * Itens declarados como públicos podem ser acessados de qualquer lugar.
 * Membros declarados como protegidos só podem ser acessados na classe declarante e suas classes herdeiras. 
 * Membros declarados como privados só podem ser acessados na classe que define o membro privado.
 * Se declarado com var a propriedade será definida como pública.
 * Métodos sem qualquer declaração explícita serão definidos como público.
 * IMPORTANTE: Ao contrário do nomedas variáveis, o nome das classes é case insencitive
 */

class Humano1{
    public $nome;
    public $apelido;
}

class Humano2{
    public function falar(){

    }
    private function andar(){

    }
    public function movimento(){
        $this->andar();
    }
}

$homem = new Humano1();
$homem-> nome = "Marcelo";
$homem-> apelido = "Medeiros";

$mulher = new Humano2();
$mulher->movimento();

