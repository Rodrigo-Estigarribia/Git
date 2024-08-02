<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Sesion Abierta</h2>
    <p>
        <?php

            if (isset($_POST['nombre'])) {
                $_SESSION['nombre'] = $_POST['nombre'];
                echo "Bienvenido,:</br>".$_POST['nombre']."</br>";
            }else {
                if (isset($_SESSION['nombre'])) {
                    echo "Has iniciado sesion como: ".$_SESSION['nombre'];
                }else {
                    #si la sesion expira
                    echo "Acceso Restringido";
                }
            }

        ?>
    </p>
    </br>
    <p>
        <a href="login.php">Ir a la pagina principal</a>
    </p>
    <p>
        <a href="logout.php">Cerrar Sesion</a>
    </p>
</body>
</html>