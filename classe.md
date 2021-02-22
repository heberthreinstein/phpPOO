layout: page
title: "Implementando Metodos"
permalink: /metodos/


# Instanciado a classe
Vamos criar nosso primeiro carro, vamos importar a classe e chamar o metodo construtor passando as caracteristicas do nosso objetos.
Para importar a classe em php usamos a palavra reservada `require` seguida do caminho para o arquivo da classe.
Para chamar o construtor utilizamos a palavra reservada `new` seguida do nome da classe.

```php
<body>
  <h1>Carro 1</h1>
  <div style="background-color: green">
    
    
    <?php //Abrimos a tag php
      
      //Importamos o arquivo que contem a classe
      require "Carro.php";
      
      //Instanciamos o carro passando as caracteristicas
      //capacidade de 50l e 15000km rodados
      $c = new Carro(50,15000);
    
    //Fechando a tag php
    ?>
  </div>
  
  <div style="background-color: yellow">
      <h1>Carro 2</h1>
      
      <?php 
        //Mesmo procedimento para o carro dois
        //somente estamos armazenando em uma
        //variavel diferente e ele tem caracteristicas
        //diferentes do carro 1.
        $c2 = new Carro(30,0);
      ?>
  </div>
</body>
```

## Chamando os metodos
Vamos chamar os metodos utilizando nossos objetos instaciados, vamos utilizar o simbolo `->` para acessar os metodos do objeto.

```php
<?php
    //chamamos o metodo abastecer para abastecermos o carro
    $c->abastecer(50);
    //chamamos o metodo andar para o carro andar tres vezes a distancia de 10km
    $c->andar(10);
    $c->andar(10);
    $c->andar(10);
?>

<?php 
    $c2 = new Carro(30,0);
    //chamamos o metodo abastecer para abastecermos o carro 2
    $c2->abastecer(30);
    //chamamos o metodo andar para o carro andar tres vezes a distancia de 10km
    $c2->andar(10);
    $c2->andar(10);
    $c2->andar(10);
?>
```


### Provando que temos dois objetos
Vamos pedir para o carro 1 andar novamente para que possamos perceber o que o carro 1 não perdeu seus dados por causa que criamos o carro 2.

```php
<!-- Criamos outra div para separar na tela -->
<div style="background-color: green">
    <!-- Adicionamos um titulo um pouco menor que os anteriores -->
    <h3>Carro 1</h3>
    <?php
        //Chamamos o metodo andar novamente utilizando a variavel que esta o carro 1
        $c->andar(10);
    ?>
</div>
```

