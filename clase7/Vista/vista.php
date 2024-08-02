<?php
    session_start();
    //session_destroy();
    require "../Modelo/Persona.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../Estilos/style.css">
</head>
<body style="margin-left: 100px; background-image: url(https://png.pngtree.com/thumb_back/fw800/background/20210327/pngtree-cute-dog-tiling-background-green-scattered-paw-image_595781.jpg) ;">
    <a href="../Controlador/CRUD.php?logout=true">SALIR</a>
    <div class="container" >
        <form action="../Controlador/CRUD.php" method="post">
            <h3>Complete el formulario con sus datos</h3>
            <input type="text" placeholder="Nombre y Apellido" name="nomAp" required><br><br>
            <input type="text" placeholder="Cedula de Identidad" name="ci" required><br><br>
            <input type="text" placeholder="Fecha de Nacimiento" name="fc" required><br><br>
            <input type="text" placeholder="Teléfono" name="tel" required><br><br>
            <input type="text" placeholder="Dirección" name="direc" required><br><br>
            <button style="color:white; border-color: rgb(109, 185, 135); background-color: rgb(109, 185, 135); border-radius: 20px;" type="submit" id="Enviar">Enviar datos</button>
        </form>
    </div>
    <div class="container" style="float: right; margin-right: 125px;">
        <table>
            <td style = "">Nombre y Apellido</td>
            <?php 
                if (isset($_SESSION['clientes'])) {
                    foreach ($_SESSION['clientes'] as $cliente) {
                        echo "<tr>";
                        echo "<td>".$cliente."</td>";
                        echo "</tr>";

                    }
                } else {
                    echo "Tabla Vacía";
                }
            ?>
        </table>
        
    </div>
</body>
</html>