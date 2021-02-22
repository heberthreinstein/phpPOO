<?php
class Carro {
    
    //Atributos
    public int $capacidade;
    public int $kilometragem;
    public float $combustivel = 0;
   
    function __construct( $capacidade, $kilometragem ) {
		$this->capacidade = $capacidade;
		$this->kilometragem = $kilometragem;
        echo 'Kilometragem:' .$this->kilometragem.' Combustivel:'.$this->combustivel.'<br>'; 
	}

    function andar($km) {
        $this->kilometragem += $km;
        $this->combustivel -= 0.1*$km;
        return 'Kilometragem:' .$this->kilometragem.' Combustivel:'.$this->combustivel.'<br>'; 
    }


    function abastecer($litros){
        if (($this->combustivel + $litros) > $this->capacidade) {
           $this->combustivel = $this->capacidade;
        } else {
            $this->combustivel += $litros;
        }
    }
}
?>