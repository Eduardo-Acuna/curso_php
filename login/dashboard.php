<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashbard</title>
</head>
<body>
    <h2>Sesion abierta</h2>

    <p>
        <?php
            if (isset($_POST['nombre'])){
                $_SESSION['nombre'] = $_POST['nombre'];
                echo "Bienvenido :<b> ".$_POST['nombre']."</b>";
            } else {
                if (isset($_SESSION['nombre'])){
                    echo "Has iniciado secion como: ".$_SESSION['nombre'];
                } else {
                    echo "Acceso Restrngido";
                }
            }
        ?>
    </p>

    <br>
    <p><a href="login.php">Ir a la pagina inicial</a></p>
    <br>
    <p><a href="logout.php">Cerrar</a></p>
</body>
</html>