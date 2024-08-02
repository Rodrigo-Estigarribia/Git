<?php

    $meses = array('Enero','Febrero','Marzo','Abril','Mayo','Junio',
                    'Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre');
    
    $dia = 1;
    $mes = 8;
    $año = 2024;

    for ($i=0; $i < 12; $i++) {
        if ($i == $mes-1) {
            echo "$dia de ".$meses[$i]." del $año";
        }
    }

?>