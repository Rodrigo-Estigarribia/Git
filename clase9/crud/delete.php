<?php
    require '../conexion/conexion.php';
    if (isset($_POST[''])) {
        
    }
    $ci = $_GET['id'];
    echo $ci;
    $consul = "DELETE FROM clientes WHERE cedula=$ci";
    $mysql -> query($consul);
    mysqli_close($mysql);
    header("location: ../vista/index.php");
?>