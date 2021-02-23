# JavaScript

Javascript é uma linguagem de programação que é executada no client-side, ou seja é o navegador que irá interpretar ela ao contrário do PHP que é interpretado pelo servidor.

O código javascript pode ser colocado diretamente dentro do código html usando a tag `<script>`, mas também pode ter seu próprio arquivo `.js` e ser importado no html.

Para demonstração criamos uma função que irá buscar uma tag na página a partir de seu id.

```html
<script>
    function trocaTitulo(){
        document.getElementById('titulo').innerHTML = 'Novo Título'
    }
</script>
```

E vamos criar um botão na página para chamar esta função e vamos colocar um id em um dos títulos.

```html
<!-- Colocando atributo id no título -->
<h1 id='titulo'>Carro 1</h1>

<!-- Atributo onClick no botão serve para chamar uma 
     função JavaScript quando clicado -->
<button onClick="trocaTitulo()">Botão</button>
```
## [Fim -> Voltar para o início](index.md)
