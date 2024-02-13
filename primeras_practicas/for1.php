<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        for($x=1 ; $x<=10 ; $x++){
            echo "9x$x = ".($x*9)."<br>";

        }

        /*
        for($x=0 ; $x<=100 ; $x+=10){
            echo "<br> y = ".$x;

        }
        */


    # FOR DENTRO DE OTRO FOR    

    for($x=0 ; $x<=10 ; $x++){
        for($y=0 ; $y<=10 ; $y++){
            echo "<br> $x * $y = ".$x*$y;
        }
        echo "<hr>";
    }

    
    ?>
</body>
</html>