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