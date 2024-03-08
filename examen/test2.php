<?php

/*Cree un array con los meses del año en letras e implemente un programa que
imprima la fecha en el formato de día – mes en letras – año. Ejemplo: 8 de agosto
de 1988*/
    $meses = array( "enero", 
                    "febrero", 
                    "marzo", 
                    "abril", 
                    "mayo", 
                    "junio", 
                    "julio", 
                    "agosto", 
                    "septiembre", 
                    "octubre", 
                    "noviembre", 
                    "diciembre");

    
    $fecha = date("Y-m-d");
    $dia =date("d");
    $mes = date("m");
    $anio = date("Y");

    echo "<br>Hoy es: ".$dia." / ".$mes." / ".$anio;

    //echo "<br>Hoy es: ".$dia." de ".$meses[$mes]." de ".$anio;


    for($i=0 ; $i<13 ; $i++){
        if($mes==$i){
            echo "<br>Hoy es: ".$dia." de ".$meses[$i-1]." de ".$anio;
            break;
        }
    }

?>