<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array 3</title>
</head>
<body>


<?php
    $productos = array(
        array("Heladera",25000000,18),
        array("Microonda",15000000,9),
        array("cocina",590000,21),
        array("Licuadora",450000,15),
        array("Mixer",260000,5),
        array("Ventilador",150000,15)
    );


   # PRIMERA FORMA DE MPRIMIR
    for( $x=0 ; $x< count($productos) ; $x++){
        echo "<br>PRODUCTO: ".$productos[$x][0]." PRECIO: ".$productos[$x][1]."CANT.: ".$productos[$x][2];
    }
    echo "<hr>";

    # SEGUNDA FOMA DE IMPRIMIR
    for( $x=0 ; $x< count($productos) ; $x++){
        echo "PRODUCTO: ".$x;
        for( $y=0 ; $y<3; $y++){
                  echo " ".$productos[$x][$y]."-";
        }
        echo "<br>";
    }
    echo "<hr>";


    # TERCERA FORMA DE IMPRIMIR
    foreach ($productos as $p){
        foreach($p as $item){
            echo $item." | ";            

        }
        echo "<br>";
    }


?>

</body>
</html>