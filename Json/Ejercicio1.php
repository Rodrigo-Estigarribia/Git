<?php

    class Cliente{
        var $nombre;
        var $edad;
        var $ciudad;

        public function __construct(){}
    }

    #convertir objeto a json
    $cliente = new Cliente();
    $cliente -> nombre = "Rodrigo";
    $cliente -> edad = "22";
    $cliente -> ciudad = "Ita";

    $code_json = json_encode($cliente);

    echo $code_json;

?>