<?php
    require '../conexion/conexion.php';
    $nomAp = $_POST['nomAp'];
    $ci2 = $_POST['ci'];
    $tel = $_POST['tel'];
    $ci = $_GET['id'];
    
    $consul = "UPDATE clientes SET cedula='$ci2',NombreApellido='$nomAp',telefono='$tel' WHERE cedula = '$ci'";
    $mysql -> query($consul);
    mysqli_close($mysql);
    header("location: ../vista/index.php");
?>