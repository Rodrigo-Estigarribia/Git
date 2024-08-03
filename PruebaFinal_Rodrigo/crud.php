<?php
    session_start();
    
    if(isset($_SESSION['usuario'])){
        $_SESSION['usuario'] = $_POST['usuario'];
    }else{
        $_SESSION = 'Anonimo';
    }


    if(isset($_POST['enviar'])){
        registrar();
    }

    function registrar(){
        if (!empty($_POST['usuario']) && !empty($_POST['mensaje'])){
            require 'conexion.php';
            $usuario = $_POST['usuario'];
            $mensaje = $_POST['mensaje'];

            $consulta = "INSERT INTO usuarios(usuario, mensaje) VALUES ('$usuario','$mensaje')";

            $resul = $sql->query($consulta);

            mysqli_close($sql);

            header('location: index.php');
            exit;            
        }
    }


?>
