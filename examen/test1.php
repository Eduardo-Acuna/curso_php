<?php
/*1. Diseñar e implementar una clase llamado Perro que herede de Animal y que
tiene datos de instancia que representa el nombre del perro y la edad (agregar
las propiedades necesarias en la clase Animal). D
efinir el constructor del perro
para inicializar los datos de instancia. Incluya los métodos get y set. Incluir un
método para calcular y devolver la edad del perro en "años-persona" (siete veces
la edad del perro). Incluir un método to_string que devuelva una descripción del
perro. El método to_string debe ser polimórfica. El nombre y la edad deben ser
atributos privados (encapsulados) y los métodos deben ser la forma de acceder
a los valores.*/ 

    class Animal{
        private $nombre;
        private $edad;
        
        public function __construct($nombre, $edad){
            $this->nombre=$nombre;
            $this->edad=$edad;
        }

        public function set_nombre($nombre){
            $this->nombre= $nombre;
        }
        public function get_nombre(){
            return $this->nombre;
        }

        public function set_edad($edad){
            $this->edad= $edad;
        }
        public function get_edad(){
            return $this->edad;
        }

        public function to_string(){
            return "Soy un animal".$this->nombre= $nombre;
        }

    }

    class Perro extends Animal{
    
        public function __construct($nombre, $edad){
            parent::__construct($nombre,$edad);
            /*$this->nombre = $nombre;
            $this->edad = $edad;*/
        }

        public function get_edad(){
            return parent::get_edad()*7;
        }

        public function to_string(){
            return "Soy un perro".parent::get_nombre();
        }


    }
       
    $perro_1 = new Perro("Toby",7);
    echo "Nombre: ". $perro_1->get_nombre();
    echo "<br>Edad: ". $perro_1->get_edad();
    echo "<br> ". $perro_1->to_string();
    


?>