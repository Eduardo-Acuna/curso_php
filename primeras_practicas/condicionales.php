<!DOCTYPE html>
<html>
    <head>
        <title>comparaciond e dos numeros </title>
        <metas charset="UTF-8"/>
    </head>
    <body>
        <?php
            $edad = 20;

            if ( $edad>= 18 && $edad<=70){
                echo "<br>Eres mayor de edad";
            } else if ($edad<18 && $edad>=11){
                echo "<br>Eres menor de edad";
            } else {
                echo "<br>Algo anda mal";
            }

        ?>


        <?php
            switch($edad){
                case 18:
                    echo "<br>Tiene 18";
                    break;
                case 15:
                    echo "<br>Tienes 15";
                    break;
                default:
                    echo "<br>Nada que celebrar";

            }
        
        ?>


    </body>
</html>
