<?php

class numero{

private $numero;

public function __construct($numero){
    $this->numero = $numero;
}

public function getNumero(){
    return $this->numero;
}

public function parOuImpar(){
    return ($this->numero % 2 == 0) ?  "par" : "impar";
    }


public function tabuada(){
    for ($i=0; $i <= 10 ; $i++){ 
         $tabuada[]=" $i x $this->numero : " . $this->numero*$i;
    }
    echo "<pre>";    
    print_r($tabuada);
    echo "</pre>";
    }

    public function raizQuadrada(){
        return sqrt($this->numero);
    }

}

  