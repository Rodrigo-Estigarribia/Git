<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <?php

        if(isset($_SESSION['nombre'])){
            echo "<p>Bienvenido: </p>".$_SESSION['nombre']."!";
            echo "<p><a href='logout.php'>Cerrar Sesión</a></p>";
            echo "<br><p><a href='dashboard.php'>Ir al panel de control</a></p>";
        }
    ?>
    <h2>Acceder</h2>
    <form action="dashboard.php" method="post">
        <p><input type="text" placeholder="Usuario" name="nombre" require autofocus></p>
        <p><input type="submit" value="Acceder"/></p>
    </form>
</body>
</html>