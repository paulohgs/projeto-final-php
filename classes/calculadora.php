<?php

    class Calculadora{

        private $total;
        private $numero1;
        private $numero2;

        function __construct(){
            $this->total = 0;
            $this->numero1 = 0;
            $this->numero2 = 0;
        }

        //Colocar os numeros dentro das variaveis a serem utilizadas no calculo
        public function setNumero1($numero1){
            $this->numero1 = $numero1;
        }
        public function setNumero2($numero2){
            $this->numero2 = $numero2;
        }

        //Metodos das operacoes matematicas realizadas
        public function somar(){
            $this->total = $this->numero1 + $this->numero2;
        }
        public function subtrair(){
            $this->total = $this->numero1 - $this->numero2;
        }
        public function multiplicar(){
            $this->total = $this->numero1 * $this->numero2;
        }
        public function dividir(){
            $this->total = $this->numero1 / $this->numero2;
        }

        //emitir o valor total
        public function getTotal(){
            return $this->total;
        }
    }

?>