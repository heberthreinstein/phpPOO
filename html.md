
## HTML
HTML é a linguagem de marcação utilizada para criação de páginas web.
Todas as páginas são baseadas em HTML, você pode verificar ao utilizar o atalha `ctrl+u` (Chrome) em qualquer página web que irá mostrar o código fonte daquela página.

Um arquivo HTML é baseado em tags que são demarcadas por `<tag>` para abrir `<\tag>` para fechar.
Todo conteúdo entre as tags de abertura e fechamento irá receber as características que cada tag contempla.

```html
    <html>
        <!-- Conteúdo da página HTMl aqui -->
    <\html>
```

## Tags básicas


### Head e Body

`<head>` Na tag head é colocado as definições para a página. Neste caso colocamos declaramos o título da página, que é o título que aparece na aba do navegador.

PRINT ABA CHROME

`<body>` Na tag body iremos colocar todo o conteúdo da nossa página.

```html
    <html>
        <head>
            <title>Carro</title>
        </head>

        <body>
            <!-- Conteúdo da página aqui -->
        </body>
    <\html>
```

### Tag PHP
Podemos utilizar as tags PHP dentro de uma página HTML também.

```php
    <html>
        <head>
            <title>Carro</title>
        </head>

        <body>
            <?php
                // Código PHP aqui
            ?>
        </body>
    <\html>
```

### Div

A tag `<div>` cria uma divisão, serve para separar conteúdos que devem ser tratados separadamente.
No exemplo criamos duas divs e alteramos a cor do fundo utilizando o atributo style.
Atributos são propriedades que podem ser adicionadas as tags html.

```html
 <div style="background-color: green">
  Fundo Verde
 </div>
 <div style="background-color: yellow">
  Fundo Amarelo
 </div>
```

PRINT DIVS

### h (headings)
As tags `<h1>...<h6>` servem para a criação de títulos, a `<h1>` sendo o título maior e a `<h6>` menor.

```html
 <h1> Título Grande </h1>
 <h3> Titulo Médio </h3>
 <h6> Título Pequeno </h6>
```

PRINT TÍTULOS


## Criando nossa página
Nesta página iremos fazer duas divs uma para cada carro e colocar um título em cada

```php
<body>
  <!-- Título para o carro 1 -->
  <h1>Carro 1</h1>
  <!-- div com o fundo verde -->
  <div style="background-color: green">
    <!-- carro 1 vai aqui -->
  </div>
  <!-- div com o fundo amarelo -->
  <div style="background-color: yellow">
      <!-- Título para o carro 2 -->
      <!-- Este título está dentro da div então vai ficar com fundo amarelo também -->
      <h1>Carro 2</h1>
      <!-- carro 2 vai aqui -->
  </div>
</body>
```

## [Próxima página -> Instanciando a classe](classe.md)


