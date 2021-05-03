<?php


class Operacoes{

    static function numeroAleatorio($min, $max){

        return rand($min, $max);
    }
    static function calcularFormula($a, $b){

        return($a*2)+($b*$a);

    }
    static function criarUmNome(){

        $nomes = ['max', 'ana', 'rui', 'bia', 'nuno'];
        $apelidos = ['silva', 'campos', 'santos', 'coelho', 'oliveira'];
        return $nomes[rand(0, count($nomes)-1)]. ' '. $apelidos[rand(0, count($apelidos)-1)];
    }
}

echo Operacoes:: numeroAleatorio(0, 1000);
echo "\n";
echo Operacoes:: calcularFormula(2, 4);
echo "\n";
echo Operacoes:: criarUmNome();


