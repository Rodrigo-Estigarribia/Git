<?php
//abstract, restricion de un clase para no ser instansiada
    abstract class Persona{
        private $nombreApellido;
        private $cedula;
        private $fechaNacimiento;

        public function __construct(){
            $this->nombreApellido;
            $this->cedula;
            $this->fechaNacimiento;
        }

        public function getNomAp(){
            return $this->nombreApellido;
        }

        public function getCedula(){
            return $this->cedula;
        }
        public function getFechaNaci(){
            return $this->fechaNacimiento;
        }
        public function setNomAp($nomAp){
            $this->nombreApellido= $nomAp;
        }
        public function setCedula($ced){
            $this->cedula= $ced;
        }
        public function setFechaNaci($fn){
            $this->fechaNacimiento= $fn;
        }

        public function getDatos(){
            return $this->nombreApellido.$this->cedula.$this->fechaNacimiento;
        }
        abstract public function getValor();

        
    }

    #Seccion de clases obviando las abstractas
    class Cliente extends Persona {
        private $telefono;
        private $direccion;

        #Se impolementa obligatoriamente la funcion abstracta que posee la clase persona
        public function getValor(){
            #tu codigo aqui :)
            return parent::getDatos(); #reemplace el cero por lo que desea retornar
            
        }

        public function __construct(){
            parent::__construct();
            $this->telefono;
            $this->direccion;
        }

        public function getTelefono(){
            return $this->telefono;
        }
        public function setTelefono($telefono){
            $this->telefono = $telefono;
        }
        public function getDirec(){
            return $this->direccion;
        }
        public function setDirec($direc){
            $this->direccion = $direc;
        }
    }
    
?>
