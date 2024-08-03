<?php
    require 'vars.php';

    $sql = new mysqli($host, $user, $clave, $db, $puerto );

    if ($sql -> errno){
        echo "Conexion Fallida ".connect_error;
    } else{
        #echo "Conexion Exitosa";
    }