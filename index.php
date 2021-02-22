<!DOCTYPE html>
<html lang="en">

<head>
    <title>Carro</title>
</head>

<body>
    <h1 id='titulo'>Carro 1</h1>
    <div style="background-color: green">
        <?php
            require "Carro.php";
            $c = new Carro(50,15000);
            $c->abastecer(50);
            $c->andar(10);
            $c->andar(10);
            $c->andar(10);
        ?>
    </div>
    <div style="background-color: yellow">
        <h1>Carro 2</h1>
        <?php 
            $c2 = new Carro(30,0);
            $c2->abastecer(30);
            $c2->andar(10);
            $c2->andar(10);
            $c2->andar(10);
        ?>
    </div>
    <div style="background-color: green">
        <h3>Carro 1</h3>
        <?php
            $c->andar(10);
        ?>
    </div>
    <br>
    <button onClick="botao()">Botão</button>
</body>

<script>

    function botao(){
        document.getElementById('titulo').innerHTML = 'Novo Titulo'
    }   


</script>

</html>