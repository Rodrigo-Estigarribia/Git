<?php

class Animal{
    
    private $nombre;
    private $edad;

    public function __construct() {
        $this->nombre;
        $this->edad;
    }

    public function setNombre($nombre){
        return $this->nombre = $nombre;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function setEdad($edad){
        return $this->edad = $edad;
    }

    public function getEdad(){
        return $this->edad;
    }
}
    #Clase Perro
    class Perro extends Animal{

        public function __construct(){
            parent::__construct(); 
        }

        public function edadPerrohumano($edadperro){
            return $edadperro*7;
        }

    }

    $perro = new Perro();

    $perro->setNombre('Firulais');
    $perro->setEdad(3);

    echo 'Hola soy '.$perro->getNombre(). 
    'y tengo '.$perro->getEdad().
    ' años que en edad humana serian '.
    $perro->edadPerrohumano($perro->getEdad()).' años';

?>
