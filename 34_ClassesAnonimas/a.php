<?php
# Classes anônimas são úteis quando objetos descartáveis precisarem ser criados.
# Podem passar argumentos através de seus construtores, estender outras classes, implementar interfaces, e usar traits como uma classe normal faz:
# Aninhar uma classe anônima dentro de outra classe não dá acesso a nenhum método privado ou protegido, ou propriedades da classe externa.
# Para utilizar os métodos e propriedades protegidas da classe externa, a classe anônima pode estender a classe externa. 
# Para utilizar as propriedades privadas da classe externa na classe anônima, elas devem ser passadas através do construtor
# Todos os objetos criados pela mesma declaração de classe anônima são instâncias desta mesma classe.
# Este tipo de Classe só faz sentido quando queremos instanciar apenas um objeto dessa classe

#classe normal

class Objeto1{
    public function teste()
    {
        echo 'teste - normal';
    }
}

$a = new Objeto1();

#classe anónima

$b = new class{
    public function teste()
    {
        echo 'teste - classe anónima';
    }
}; # Nota: é impotante notar que tem que fechar o código com ;

$a -> teste();
echo "\n";
$b -> teste();