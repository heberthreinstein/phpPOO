# Introdução a PHP e Programação Orientada a Objetos

## Arquivo PHP

O código PHP fica armazenado em um arquivo com a extensão ".php".
Dentro desse arquivos presisamos demarcar os limites do codigo PHP utilizando as tags `<?php` para demarcar o inicio e `?>` para o final.

```php
<?php
  // Seu código vai aqui.
?>
```

## Variaveis em PHP

As variaveis em PHP são demarcar pelo simbolo '$'.
Todas as variáveis devem começar com este simbolo.
Ao declarar um váriavel em PHP não é necessario a declaração de seu tipo.

```php
<?php
  // Declaração de variavel sem valor.
  $variavel;
  
  // Declaração de variavel atribuindo um valor.
  // Automaticamente a variavel vai entender que é do tipo inteiro.
  $variavel2 = 1
  // Automaticamente a variavel vai enteder que é do tipo inteiro.
  $variavel3
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


```markdown
Syntax highlighted code block

# Header 1
## Header 2
### Header 3

- Bulleted
- List

1. Numbered
2. List

**Bold** and _Italic_ and `Code` text

[Link](url) and ![Image](src)
```

For more details see [GitHub Flavored Markdown](https://guides.github.com/features/mastering-markdown/).

### Jekyll Themes

Your Pages site will use the layout and styles from the Jekyll theme you have selected in your [repository settings](https://github.com/heberthreinstein/phpPOO/settings). The name of this theme is saved in the Jekyll `_config.yml` configuration file.

### Support or Contact

Having trouble with Pages? Check out our [documentation](https://docs.github.com/categories/github-pages-basics/) or [contact support](https://support.github.com/contact) and we’ll help you sort it out.
