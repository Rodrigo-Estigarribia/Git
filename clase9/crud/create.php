<?php
    require '../conexion/conexion.php';
    $nomAp = $_POST['nomAp'];
    $ci = $_POST['ci'];
    $tel = $_POST['tel'];

    $consul = "INSERT INTO clientes (cedula, NombreApellido, telefono) values ('$ci','$nomAp','$tel')";
    $mysql -> query($consul);
    mysqli_close($mysql);
    #header("location: ../vista/index.php");
?>