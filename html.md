layout: page
title: "HTML"
permalink: /html/


# HTML
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

