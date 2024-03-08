<?php
/*3. Simule un sorteo de premios donde se dispone de una lista de N nombres de
personas y una lista de M premios (donde M<=N). Los premios se sortean según
su orden en la lista, al sortearse un premio se elige aleatoriamente una persona,
la persona y el premio deben ser eliminados de las listas respectivas. A
continuación, ambos deben ser añadidos a una lista de premiados. El proceso
se deberá repetir hasta sortear todos los premios. Al finalizar el sorteo, imprimir
los premiados con su premio correspondiente.*/

    $persona = array("Eduardo","Timo","Luis","Luz","Siria");
    $premio = array("psp","play 2","celular");
    $cant = count($persona)-1;

    foreach ($premio as $p){
        //$cant = count($persona)-1;
        while(1){
            $sorteo = rand(0,$cant);
            if( $persona[$sorteo]!="0"){
                $ganador[$p] = $persona[$sorteo];
                $persona[$sorteo] = "0";
                break;
            }
        }



        //$ganador[$p] = $persona[$sorteo];
    }

    foreach ($ganador as $item => $p){
        echo "Premio: ".$item." -----> Ganador: ".$p."<br>";
    }


    echo "<br>";

?>