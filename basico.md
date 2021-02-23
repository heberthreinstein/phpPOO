



# Básico PHP Orientado a Objetos

## Arquivo PHP

O código PHP fica armazenado em um arquivo com a extensão `.php`.
Dentro desses arquivos precisamos demarcar os limites do código PHP utilizando as tags `<?php` para demarcar o início e `?>` para o final.

```php
<?php
  // Seu código vai aqui.
?>
```

## Variáveis em PHP

As variáveis em PHP são demarcadas pelo simbolo `$`.
Todas as variáveis devem começar com este símbolo.
Ao declarar uma variável em PHP não é necessário a declaração de seu tipo.

```php
<?php
  // Declaração de variável sem valor.
  $variavel;
  
  // Declaração de variavel atribuindo um valor.
  // Automaticamente a variável vai entender que é do tipo inteiro.
  $variavel2 = 1
  // Automaticamente a variável vai entender que é do tipo string.
  $variavel3 = 'frase'
?>
```

## Classes

Para declarar uma classe em PHP utilizando a palavra reservada `class` acompanhada do nome da classe e chaves de abertura e fechamento.
Todo nome de classe deve começar com a primeira letra maiúscula e ter o mesmo nome do arquivo.

```php
<?php
  // Declaração da classe Carro.
  class Carro {
    // Código da classe vai aqui.
  }
?>
```
### Atributos

A declaração de atributos é feita da mesma forma que a declaração de variáveis, a diferença sendo que elas ficam dentro da classe.
Em PHP a declaração para a declaração de atributos é requisitado um tipo para esse atributo e um modificador de acesso que controla o acesso a essa variável, neste caso vamos utilizar `public` que não tem restrições.

As variáveis em PHP podem ser dos seguintes tipos:  
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
    public int $quilometragem;

    // Combustível será do tipo float
    public float $combustivel;

    // Andando sempre iniciará como falso então 
    //já atribuímos o valor aqui.
    // Percebe-se que não precisamos declarar o 
    //tipo, pois ele já assume baseado no valor atribuído.
    public $andando = false;
  }
?>
```


## Acessando atributos
Para acessarmos um atributo em uma classe utilizamos o símbolo `->`.
Ele é utilizado após a instancia da classe no seguinte formato:   `$classe->atributo`.
Neste caso com ainda estamos dentro da própria classe utilizamos a palavra reservado `$this` que basicamente serve para referenciar para os atributos da classe que está sendo implementada.

```php
<?php
    //Assim podemos acessar o atributo
    //igualmente a uma variável qualquer
    
    //Altera o valor
    $this->atributo = 'valor';

    //Imprimir seu valor
    print $this->atributo;
?>
```
## Métodos
Métodos são como funções e sua declaração também não é diferente.
Em php a palavra reservada `function` é utilizada para marcar uma função ou método.

```php
<?php
  // Declaração da classe Carro.
  class Carro {
    
    // Declaração dos atributos do tipo inteiro.
    public int $capacidade;
    public int $quilometragem;
    public int $combustivel;

    // Declaração das funções.
    public function andar(){
      //Código da função aqui.
    }

    //Método abastecer espera um parâmetro litros
    //que será usado para saber a quantia a colocar 
    //no carro.
    //Litros não tem uma declaração de tipo 
    //específico pois é uma variável.
    public function abastecer($litros){
      //Código da função aqui.
    }
  }
?>
```


### Implementando os métodos
### Construtor
O método construtor é um método muito importante pois é ele que vai instanciar(construir) a classe(objeto).  
Neste método vamos atribuir todas as características específicas para este objeto.
Ele é reconhecido pela linguagem pelo nome `__construct`. Caso este método não exista, não será possível instanciar essa classe.


```php
<?php
    //Método construtor recebe dois parâmetros
    //Estes parâmetros são as características específicas
    //deste objeto que vai ser criado.
    function __construct( $capacidade, $quilometragem ) {
        
        //Dentro do método simplesmente precisamos atribuir
        //estes valores a seus respectivos atributos.
        $this->capacidade = $capacidade;
        $this->quilometragem = $quilometragem;

        //Aproveitamos para mostrar na tela o objeto que está
        //sendo criado.
        print 'Quilometragem:' .$this->quilometragem.' Combustivel:'.$this->combustivel.'<br>'; 
    }
?>
```

### Andar
O método andar irá somar o valor recebido a quilometragem atual do carro e irá calcular o consumo do combustível e subtrair do tanque.

```php
<?php
    function andar($km) {
    
        //Somamos os km recebidos a quilometragem do carro
        $this->quilometragem += $km;

        //Multiplicamos os km recebido por 0.1 e subtraímos do 
        //combustível do carro
        $this->combustivel -= 0.1*$km;

        // Mostra na tela a Quilometragem atual e o combustível
        print 'Quilometragem:' . $this->quilometragem . ' Combustivel:'.  $this->combustivel . '<br>'; 
    }
?>
```

### Abastecer
O método abastecer iremos verificar se a quantidade total de combustível não irá ultrapassar a quantidade máxima, se sim deixamos o tanque cheio, se não somamos a quantidade ao combustível atual


```php
<?php
    function abastecer($litros){
        //Verificamos se a soma do combustível atual com a quantidade
        //a ser colocada não ultrapassa a capacidade do carro
        if (($this->combustivel + $litros) > $this->capacidade) {
            //Se ultrapassou deixamos o tanque cheio 
           $this->combustivel = $this->capacidade;
        } else {
            //Caso não ultrapasse somamos e atribuímos a quantidade
            //de combustível ao combustível do carro
            $this->combustivel += $litros;
        }
    }
?>
```

## [Próxima página -> HTML Básico](html.md)

