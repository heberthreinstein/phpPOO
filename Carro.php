<?php
class Carro {
    
    //Atributos
    public int $capacidade;
    public int $kilometragem;
    public float $combustivel;
    public $andando = false;
   
    function andar() {

        $this->andando = true;

        while ($this->andando) {
            $this->kilometragem++;
            $this->combustivel -= 0.1;
            sleep(1);
        }
    }

    function parar() {
        $this->andando = false;
    }

    function abastecer($litros){
        $this->combustivel += $litros;
    }
}
?>