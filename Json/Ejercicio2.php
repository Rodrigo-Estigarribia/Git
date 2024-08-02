<?php

    #convetir array a json

    $lista = array('lapiz','cuaderno','boligrafo');

    $lista_json = json_encode($lista);

    echo $lista_json;

?>