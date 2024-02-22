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
            return "Marca: ".$this->marca." , Motor: ".$this->motor;
        }
    }


    $auto1 = new Automovil();
    $auto1->motor = 2.0;
    $auto1->marca = 'Toyota';
    $auto1->set_color("Azul") ;
    echo " ".$auto1->get_color();
    echo "<br> ".$auto1->get_datos();


    $auto2 = new Automovil();
    $auto1->set_color("Gris") ;
    $auto2->motor = 1.5;
    $auto2->marca = 'Ford';
    echo " ".$auto2->get_color();
    echo "<br> ".$auto2->get_datos();





?>
