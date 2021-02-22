
## HTML
HTML é a linguagem de marcação utilizada para criação de paginas web.
Todas as paginas são baseadas em HTML, você pode verificar ao utilizar o atalha ´ctrl+u´(Chrome) em qualquer pagina web que irá mostrar o codigo fonte daquela pagina.

Um arquivo HTML é baseado em tags que são demarcadas por `<tag>` para abrir `<\tag>` para fechar.
Todo conteudo entre as tag de abertura e fechamento irá receber as caracteristicas que cada tag contempla.

```html
    <html>
        <!-- Conteudo da página HTMl aqui -->
    <\html>
```

## Tags básicas


### Head e Body

`<head>` Na tag head é colocado as definições para a pagina. Neste caso colocamos declaramos o titulo da página, que é o titulo que aparece na aba do navegador.

PRINT ABA CRHOME

`<body>` Na tag body iremos colocar todo o conteudo da nossa pagina.

```html
    <html>
        <head>
            <title>Carro</title>
        </head>

        <body>
            <!-- Conteudo da página aqui -->
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
                // Codigo PHP aqui
            ?>
        </body>
    <\html>
```

### Div

A tag `<div>` cria uma divisão, serve para separar conteudos que devem ser tratados separadamente.
No exemplo criamos duas divs e alteramos a cor do fundo utilizando o atributo style.
Atributos são propiedades que podem ser adicionadas as tags html.

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
As tags `<h1>...<h6>` servem para a criação de titulos, a `<h1>` sendo o titulo maior e a `<h6>` menor.

```html
 <h1> Titulo Grande </h1>
 <h3> Titulo Médio </h3>
 <h6> Titulo Pequeno </h6>
```

PRINT TITULOS


## Criando nossa página
Nesta pagina iremos fazer duas divs uma para cada carro e colocar um titulo em cada

```php
<body>
  <!-- Titulo para o carro 1 -->
  <h1>Carro 1</h1>
  <!-- div com o fundo verde -->
  <div style="background-color: green">
    <!-- carro 1 vai aqui -->
  </div>
  <!-- div com o fundo amarelo -->
  <div style="background-color: yellow">
      <!-- Titulo para o carro 2 -->
      <!-- Este titulo esta dentro da div entao vai ficar com fundo amarelo também -->
      <h1>Carro 2</h1>
      <!-- carro 2 vai aqui -->
  </div>
</body>
```

## [Próxima página -> Instanciando a classe](classe.md)
