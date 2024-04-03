<?php 
    
    class Humanos {
        

        private $masculinos = [];
        private $femininos = [];
        private $desconhecidos = [];



        public function definir($sexo, $nome)
        {
           if (strtoupper($sexo) == 'M') {
            $this->masculinos[] = $nome;
           } else if (strtoupper($sexo) == 'F'){
            $this->femininos[] = $nome;
           }else{
            $this->desconhecidos[]= $nome;
           }
        }

        public function getMasculinos(){
            return $this->masculinos;
        }
 
        public function getFemininos(){
            return $this->femininos;
        }

        public function getDesconhecidos(){
            return $this->desconhecidos;
        }



    }




?>