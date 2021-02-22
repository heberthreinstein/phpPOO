# JavaScript

Java script é uma linguagem de programação que é executada no client side, ou seja é o navegador que irá interpretar ela ao contrario do PHP que é interpretado pelo servidor.

O codigo javascript pode ser colocado diretamente dentro do codigo html usando a tag `<script>`, mas também pode ter seu própio arquivo `.js` e ser importado no html.

Para demonstração criamos uma função q irá buscar uma tag na página a partir de seu id.

```html
<script>
    function trocaTitulo(){
        document.getElementById('titulo').innerHTML = 'Novo Titulo'
    }
</script>
```

E vamos criar um botão na pagina para chamar esta função e vamos colocar um id em um dos titulos.

```html
<!-- Colocando atributo id no titulo -->
<h1 id='titulo'>Carro 1</h1>

<!-- Atributo onClick no botão serve para chamar uma 
     função JavaScript quando clicado -->
<button onClick="trocaTitulo()">Botão</button>
```

