<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edad</title>
    <style>
        .estilo_par{
            color:red;
        }

        .estilo_impar{
            color: green;
        }

    </style>
</head>
<body>
    <?php
        for($x=1 ; $x<=100 ; $x++){
            if($x%2==0){
                echo " <p class='estilo_par'>numero par: $x </p>";
            } else {
                echo "<p class='estilo_impar'>numero impar:  $x </p>";
            }
        }
    
    ?>
</body>
</html>