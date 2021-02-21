# Introdução a Programação Orientada a Objetos em PHP

## Arquivo PHP

O código PHP fica armazenado em um arquivo com a extensão `.php`.
Dentro desse arquivos presisamos demarcar os limites do codigo PHP utilizando as tags `<?php` para demarcar o inicio e `?>` para o final.

```php
<?php
  // Seu código vai aqui.
?>
```

## Variaveis em PHP

As variaveis em PHP são demarcar pelo simbolo `$`.
Todas as variáveis devem começar com este simbolo.
Ao declarar um váriavel em PHP não é necessario a declaração de seu tipo.

```php
<?php
  // Declaração de variavel sem valor.
  $variavel;
  
  // Declaração de variavel atribuindo um valor.
  // Automaticamente a variavel vai entender que é do tipo inteiro.
  $variavel2 = 1
  // Automaticamente a variavel vai entender que é do tipo string.
  $variavel3 = 'frase'
?>
```

## Classes

Para declara um classe em PHP utilizando a palavra reservada `class` acompanhada do nome da classe e chaves de abertura e fechamento.
Todo nome de classe deve começar com a primeira letra maiuscula e ter o mesmo nome do arquivo.

```php
<?php
  // Declaração da classe Carro.
  class Carro {
    // Código da classe vai aqui.
  }
?>
```
### Atributos

A declaração de atributos é feita da mesmo forma que a declaração de variáveis, a diferença sendo que elas ficam dentro da classe.
Em PHP a declaração para a declaração de atributos é requisitado um tipo para esse atributo e um modificador de acesso que controla o acesso a essa váriavel neste caso vamos utilizar `public` que não tem restrições.

As variaveis em PHP podem ser dos seguintes tipos:  
String: `string`  
Inteiro: `int`  
Float ou double: `float`  
Booleano: `bool`  
Array: `array`  
Objeto: Classe existente na aplicação.

```php
<?php
  // Declaração da classe Carro.
  class Carro {
    
    // Declaração dos atributos todos são do tipo inteiro
    public int $capacidade;
    public int $kilometragem;
    public int $combustivel;
  }
?>
```
### Métodos
Métodos são como funções e sua declaração também não é diferente.
Em php a palavra reservada `function` é utilizada para marcar uma função ou metódo.

```php
<?php
  // Declaração da classe Carro.
  class Carro {
    
    // Declaração dos atributos todos são do tipo inteiro.
    public int $capacidade;
    public int $kilometragem;
    public int $combustivel;

    // Declaração das funções.
    public function andar(){
      //Codigo da função aqui.
    }

    public function parar(){
      //Codigo da função aqui.
    }

    //Método abastecer espera um parametro litros que será usado para saber a quantia a colocar no carro.
    public function abastecer($litros){
      //Codigo da função aqui.
    }
  }
?>
```