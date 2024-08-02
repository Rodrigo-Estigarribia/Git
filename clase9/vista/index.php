<?php
    require '../conexion/conexion.php';
    require '../crud/read.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1 style="text-align: center; font-family: monospace;">Registrar Clientes</h1>

    <div style="border-radius: 20px; background-color: cornflowerblue; text-align: center; padding: 20px;">
        <form action="../crud/create.php" method="post">

            <input type="text" name="nomAp" placeholder="Nombre y Apellido" required autocomplete="off"></br></br>
            <input type="number" name="ci" placeholder="cedula" required autocomplete="off"></br></br>
            <input type="text" name="tel" placeholder="telefono" required autocomplete="off"></br></br>
            <button type="submit" name="btn">ACEPTAR</button>
        </form>
    </div>
    <br>
    <table>
        <?php if (!empty($_SESSION['clientes'])) { ?>
            <!--Cabecera de la tabla-->
            <tr style='background-color: royalblue;'>
                <td width='50%'>Nombre y Apellido</td>
                <td width='30%'>Cedula</td>
                <td width='20%'>Telefono</td>
                <td width='%'>    </td>
            </tr>
            <!--Cuerpo de la tabla-->
            <?php foreach ($_SESSION['clientes'] as $clientes) {?>
                <tr style='background-color: paleturquoise;'>
                    <td width='50%'><?php echo $clientes[1] ?></td>
                    <td width='30%'><?php echo $clientes[0] ?></td>
                    <td width='20%'><?php echo $clientes[2] ?></td>
                    <td width='%'><a href="../crud/delete.php?id= <?php echo $clientes[0] ?>" style="padding: 7px; text-decoration: none;">🗑</a></td>
                    <td width='%'><a href="../crud/update.php?id= <?php echo $clientes[0] ?>" style="padding: 7px; text-decoration: none;">Editar</a></td>
                </tr>
               
        <?php }}else {
            echo "<div style='text-align: center; background-color: paleturquoise;'>Tabla esta vacia</div>"; 
        }?>
    </table>
    
</body>
</html>

