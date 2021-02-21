layout: page
title: "Implementando Metodos"
permalink: /metodos/


### Implementando métodos

## Acessando atributos
Para acessarmos um atributo em um classe utilizamos o simbolo `->`.
Ele é utilizado após a instancia da classe no seguinte formato `$classe->atributo`.
Neste caso com ainda estamos dentro da própia classe utilizamos a palavra reservado `$this` que basicamente serve para referenciar para os atributos da classe que está sendo implementada.

```php
<?php
    //Assim podemos acessar o atributo
    //igualmente a uma variavel qualquer
    
    //Altera o valor
    $this->atributo = 'valor';

    //Imprimir seu valor
    print $this->atributo;
?>
```

# Implementando os métodos
O método andar irá alterar o atributo andando para verdadeiro e irá repetir um laço até q esse atributo se torne falso. Dentro deste laço de repitição a cada 1 segundo é adicionado 1km a kilometragem do carro e retirada 0.1 de combustivel.
Já no método parar somente alteraramos o valor de andando para falso.

```php
<?php
    function andar() {
        //Setamos o atributo andando para verdadeiro
        $this->andando = true;

        //Repetimos até o atributo andando se torne falso
        while ($this->andando) {
            //Adicionamos 1km a kilometragem do carro
            $this->kilometragem++;
            //Retiramos 0.1 litros de combustivel
            $this->combustivel -= 0.1;
            //Aguarda 1 segundo para repetiver novamente
            sleep(1);
        }
    }

    function parar() {
        $this->andando = false;
    }
?>
```
O método abastecer iremos verificar se a quantidade total de combustivel não irá ultrapassar a quantidade máxima, se sim deixamos o tanque cheio, se não somamos a quantidade ao cobustivel atual


```php
<?php
    function abastecer($litros){
        //Verificamos se a some do combustivel atual com a quantidade
        //a ser colocada não ultrapassa a capacidade do carro
        if (($this->combustivel + $litros) > $this->capacidade) {
            //Se ultrapassou deixamos o tanque cheio 
           $this->combustivel = $this->capacidade;
        } else {
            //Caso não ultrapasse somamos e atribuimos a quantidade
            //de combustivel ao combustivel do carro
            $this->combustivel += $litros;
        }
    }
?>
```