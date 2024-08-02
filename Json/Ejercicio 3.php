<?php

    header("Content-Type:application/json");

    $peso = $_GET['peso'];
    $estatura = $_GET['estatura'];

    #se validan las variables
    if (!empty($peso) && !empty($estatura)) {
        #conversion centimetros a metros
        $estatura = $estatura/100;

        #formula peso(kg)/talla(m2)
        $imc = $peso / ($estatura * $estatura);

        #redondeamos a dos decimales
        $imc = round($imc, 2);

        #entregamos respuesta
        respuesta(200, "tu imc es de $imc",$imc);
    }else {
        
        #entregamos respuesta
        deliver_response(200,"datos no validos", null);
    }

    #funcion que crea la respuesta, con estado, mensaje de estados y datos
    function respuesta($estado, $mensaje_estado, $datos){
        #cabecera respuesta
        header("HTTP/1.1 $estado $mensaje_estado");

        #rellenamos arry con estado, mensaje y datos
        $respuesta['estado'] = $estado;
        $respuesta['mensaje_estado'] = $mensaje_estado;
        $respuesta['datos'] = $datos;

        #codificacion del json
        $respuesta_json = json_encode($respuesta);

        #imprimimos el contenido del json
        echo $respuesta_json;
    }

?>