<?php
    class Persona{
        public $nombre;
        public $telefono;

        public function __construct($nomb, $tel){
            $this->nombre=$nomb;
            $this->telefono=$tel;
        }

        
        public function obtener_datos(){
            return "Nombre: ".$this->nombre."<br>Telefono: ".$this->telefono;
        }
    }


    class Alumno extends Persona{
        private $grado;
        private $turno;

        public function __construct($nomb, $tel, $grado, $turno){
            parent::__construct($nomb,$tel);
            $this->grado = $grado;
            $this->turno = $turno;
        }

        public function obtener_datos(){
            return parent::obtener_datos()."<br>Grado: ".$this->grado."<br>Turno: ".$this->turno."<br>"; 
        }
    }
?>



<h1> Crear un objeto array de la clas alumno</h1>
<?php

    $lista_alumno = array(
        $alumno1 = new Alumno("Camila","05465484454","Tercero - Nivel Medio","Tarde"),
        $alumno1 = new Alumno("edgar","05465484454","segundo - Nivel Medio","mañana"),
        $alumno1 = new Alumno("Camila","05465484454","primero - Nivel Medio","noche")




    )
?>


<h1>Imprimir sus datos con foreach</h1>
<?php
    foreach( $lista_alumno as $alumno){
        echo $alumno->obtener_datos();
        echo "<br>";
    }
    
?>


