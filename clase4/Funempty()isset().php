<?php

    $saludo1;
    $saludo2='estoy definida y mi valor no es nulo';

    if (empty($saludo1)) { #Define si una variable esta vacio
        $saludo1= 'Hola, ';
    }

    if (isset($saludo2)) { #Define si una variable esta declarada y que su valor no sea nulo
        $saludo2= 'que tal?';
    }

    echo $saludo1.$saludo2;

?>