<?php
    require 'vars.php';
    $mysql = new mysqli($host,$user,$password,$data_base,$port);

    if ($mysql->connect_errno) {
        echo "FALLO EN LA CONEXION (".$mysql->connect_errno.") ".$mysql->connect_error;
    } else {
       // echo "CONEXION EXITOSA A MYSQL 🤏🏽 ".$mysql->host_info;
    }
    
?>