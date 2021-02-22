
# Basico PHP Orientado a Objetos

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
    
    // Declaração dos atributos do tipo inteiro
    public int $capacidade;
    public int $kilometragem;

    // Combustivel será do tipo float
    public float $combustivel;

    // Andando sempre iniciará como falso então 
    //já atribuimos o valor aqui.
    // Percebe-se que não precisamos declarar o 
    //tipo, pois ele já assume baseado no valor atribuido.
    public $andando = false;
  }
?>
```


## Acessando atributos
Para acessarmos um atributo em um classe utilizamos o simbolo `->`.
Ele é utilizado após a instancia da classe no seguinte formato:   `$classe->atributo`.
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
## Métodos
Métodos são como funções e sua declaração também não é diferente.
Em php a palavra reservada `function` é utilizada para marcar uma função ou metódo.

```php
<?php
  // Declaração da classe Carro.
  class Carro {
    
    // Declaração dos atributos do tipo inteiro.
    public int $capacidade;
    public int $kilometragem;
    public int $combustivel;

    // Declaração das funções.
    public function andar(){
      //Codigo da função aqui.
    }

    //Método abastecer espera um parametro litros
    //que será usado para saber a quantia a colocar 
    //no carro.
    //Litros não tem uma declaração de tipo 
    //especifico pois é uma variavel.
    public function abastecer($litros){
      //Codigo da função aqui.
    }
  }
?>
```


### Implementando os métodos
### Construtor
O método construtor é um método muito importante pois é ele que vai instanciar(construir) a classe(objeto).  
Neste método vamos atribuir todas as caracteristicas especificas para este objeto.
Ele é reconhecido pela linguagem pelo nome `__construct`. Caso este método não exista não será possivel instanciar esta classe.


```php
<?php
    //Método construtor recebe dois parametros
    //Estes parametros são as caracteriscas especificas
    //deste objeto que vai ser criado.
    function __construct( $capacidade, $kilometragem ) {
        
        //Dentro do método simplemeste precisamos atribuir
        //estes valores a seus respctivos atributos.
        $this->capacidade = $capacidade;
        $this->kilometragem = $kilometragem;

        //Aproveitamos para mostrar na tela o objeto que esta
        //sendo criado.
        print 'Kilometragem:' .$this->kilometragem.' Combustivel:'.$this->combustivel.'<br>'; 
    }
?>
```

### Andar
O método andar irá somar o valor recebido a kilometragem atual do carro e irá calcular o consumo do combustivel e subtrair do tanque.

```php
<?php
    function andar($km) {
    
        //Somamos os km recebidos a kilometragem do carro
        $this->kilometragem += $km;

        //Multiplicamos os km recebido por 0.1 e subtraimos do 
        //combustivel do carro
        $this->combustivel -= 0.1*$km;

        // Mostra na tela a Kilometragem atual e o combustivel
        print 'Kilometragem:' . $this->kilometragem . ' Combustivel:'.  $this->combustivel . '<br>'; 
    }
?>
```

### Abastecer
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

## [Proxima página -> HTML Básico](html.md)