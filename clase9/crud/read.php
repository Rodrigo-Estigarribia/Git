<?php
    session_start();

    require '../conexion/conexion.php';
    $consulta = "SELECT * FROM clientes";
    $resul = $mysql->query($consulta);

    $_SESSION['clientes']=array();
    if ($resul->num_rows>0) {
        
        while ($a = $resul->fetch_assoc()) {

            $clientes=array(

                $a['cedula'],
                $a['NombreApellido'],
                $a['telefono']

            );
        
            array_push($_SESSION['clientes'], $clientes);

        }
    } 
?>