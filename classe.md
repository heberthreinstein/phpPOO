
# Instanciado a classe
Vamos criar nosso primeiro carro, vamos importar a classe e chamar o método construtor passando as características do nosso objetos.
Para importar a classe em php usamos a palavra reservada `require` seguida do caminho para o arquivo da classe.
Para chamar o construtor utilizamos a palavra reservada `new` seguida do nome da classe.

```php
<body>
  <h1>Carro 1</h1>
  <div style="background-color: green">
    
    
    <?php //Abrimos a tag php
      
      //Importamos o arquivo que contém a classe
      require "Carro.php";
      
      //Instanciamos o carro passando as características
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
        //variável diferente e ele tem características
        //diferentes do carro 1.
        $c2 = new Carro(30,0);
      ?>
  </div>
</body>
```

## Chamando os métodos
Vamos chamar os métodos utilizando nossos objetos instanciados, vamos utilizar o símbolo `->` para acessar os métodos do objeto.

```php
<?php
    //chamamos o método abastecer para abastecermos o carro
    $c->abastecer(50);
    //chamamos o método andar para o carro andar três vezes a distância de 10km
    $c->andar(10);
    $c->andar(10);
    $c->andar(10);
?>

<?php 
    $c2 = new Carro(30,0);
    //chamamos o método abastecer para abastecermos o carro 2
    $c2->abastecer(30);
    //chamamos o método andar para o carro andar três vezes a distância de 10km
    $c2->andar(10);
    $c2->andar(10);
    $c2->andar(10);
?>
```


### Provando que temos dois objetos
Vamos pedir para o carro 1 andar novamente para que possamos perceber que o carro 1 não perdeu seus dados por causa que criamos o carro 2.

```php
<!-- Criamos outra div para separar na tela -->
<div style="background-color: green">
    <!-- Adicionamos um título um pouco menor que os anteriores -->
    <h3>Carro 1</h3>
    <?php
        //Chamamos o método andar novamente utilizando a variável que está o carro 1
        $c->andar(10);
    ?>
</div>
```

## [Proxima página -> JavaScript](javascript.md)


