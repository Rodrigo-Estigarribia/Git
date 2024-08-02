<?php 
    #incluir el archivo de las clases
    session_start();
    require "../Modelo/Persona.php";

    if(!isset($_SESSION['clientes'])){
        $_SESSION['clientes']=array();
    }

    if(isset($_POST['nomAp'])){
        agregarCliente();
    }

    if(isset($_GET['logout'])){
        if ($_GET['logout'] == "true") {
            session_destroy();
            echo "hola mundo";
           header("location: ../Vista/vista.php");
        exit;
        }
    }
    function agregarCliente(){
 
        if(isset($_POST)){
            $cliente = new Cliente();
            $cliente->setNomAp($_POST['nomAp']);
            $cliente->setCedula($_POST['ci']);
            $cliente->setFechaNaci($_POST['fc']);
            $cliente->setTelefono($_POST['tel']);
            $cliente->setDirec($_POST['direc']);
            array_push($_SESSION['clientes'], $_POST['nomAp']);

            header("location: ../Vista/vista.php");
            exit;
        }
    }
?>