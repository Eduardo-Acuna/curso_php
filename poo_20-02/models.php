<?php
/*Desarrolla una aplicación web para guardar datos de clientes.
INDICACIONES
1. Usando DIAGRAMS.NET modela el diagrama de clases para el ejercicio planteado. La clase abstracta Persona deberá de tener los atributos: nombre y apellido, fecha de nacimiento y número de cédula, un constructor y métodos para retornar los valores. La clase Cliente hereda de la clase Persona y sus atributos son teléfono y dirección, un constructor y métodos para retornar los valores. Los atributos de ambas clases deben ser privados y solo accedidas por medio de los métodos. Agrega el método abstracto get_valor() a la clase Persona.
2. Codifíca las clases planteadas en models.php
3. Codifica las funciones agregar_cliente y listar_clientes en controllers.php
4. Prepara la vista en html*/

    abstract class persona{
        private $nombre_apellido;
        private $fecha_nacimiento;
        private $cedula;

        public function __construct($nom,$fec,$ced){
            $this->nombre_apellido = $nom;
            $this->fecha_nacimiento = $fec;
            $this->cedula = $ced; 
        }

        // 
        public function set_nombre_apellido($nom){
            $this->nombre_apellido = $nom;
        }

        public function get_nombre_apellido(){
            return $this->nombre_apellido;
        }

        public function get_valor(){
            return "nada";
        }
    }


    class Cliente extends Persona{
        private $telefono;
        private $direccion;

        public function __construct($nom , $fec, $ced, $tel, $dir){
            parent::__construct($nom, $fec, $ced);
            $this->telefono = $tel;
            $this->direccion = $dir;
        }


        public function set_telefono($tel){
            $this->telefono = $tel;
        }

        public function get_telefono(){
            return $this->telefono;
        }

        public function get_valor(){
            return "algo diferente, un JSON";
        }

    }

    //$p = new persona("Cristhofer", "21/01/2011","4545455");
    //echo " ".get_valor();

?>