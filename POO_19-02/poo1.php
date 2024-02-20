<?php
    class Automovil{
        //public $color; // encapsulamiento
        public $motor;
        public $marca;

        private $color;
        //private $motor;
        //private $marca;


        public function set_color($var_color){
            $this->color= $var_color;
        }

        public function get_color(){
            return $this->color;
        }

        public function get_datos(){
            return "Marca: ".$this->marca." , Motor: ;".$this->motor;
        }
    }


    $auto1=new Automovil();
    //$auto1->color = 'verde';
    $auto1->motor = 2.0;
    $auto1->marca = 'Toyota';

    $auto1->set_color("azul") ;
    /*$auto1->set_motor("2.2") ;
    $auto1->set_marca("kia") ;*/

    echo " ".$auto1->get_color();
    echo "<br> ".$auto1->get_datos();





?>