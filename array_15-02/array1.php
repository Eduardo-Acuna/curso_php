<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .color_dia{
            color:red;
        }


    </style>

</head>
<body>

    <?php
    
        $dia[0] = "lunes";
        $dia[1] = "martes";
        $dia[2] = "miercoles";
        $dia[3] = "jueves";
        $dia[4] = "viernes";
        $dia[5] = "sabado";
        $dia[6] = "domingo";

        $mes = array("enero", "febrero", "miercoles");

        $hoy = date("N")-1;
        echo "hoy es: $dia[$hoy]";
        echo "<br>Dia: $dia[5]";
        echo "<hr>";
        echo"Mes> $mes[1]";


        print("<h4>LOS DIAS DE LAS SEMANAS:</h4>");

        for ( $x=0 ; $x<count($dia) ; $x++){
            if ($x==$hoy ){
                echo "<p class='color_dia'>$dia[$x] <br></p>";
            } else {
                echo "$dia[$x] <br>";
            }
            
            
        }
    ?>

    <?php 


        $autos = array("Volvo", "BMW", "Toyota");

        $array_longitud = count($autos);
        echo "<hr>";
        for ( $x=0 ; $x<$array_longitud ; $x++){
            echo $autos[$x];
            echo "<br>";
        }


    ?>




</body>
</html>