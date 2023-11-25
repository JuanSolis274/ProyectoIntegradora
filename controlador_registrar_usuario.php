<?php
use MyApp\data\Database;
require("vendor/autoload.php");
$db = new Database;

if ($_POST["sendMessageButton"]){
    // if (empty($_POST["name"]) or empty($_POST["email"])
    // or empty($_POST["subject"]) or empty($_POST["message"])) {
    //     echo 'Uno de los campos esta vacio';
        // } else {
            $nombre=$_POST["name"];
            $apellido=$_POST["email"];
            $asunto=$_POST["subject"];
            $mensaje=$_POST["message"];
            $insertQuery="insert into opiniones (opinion,asunto,nombre,correo) values('$nombre,'$apellido','$asunto','$mensaje')";
            $insert=$db->execQuery($insertQuery);
            // $sql= $sql->query(" insert into opiniones
            // (opinion,asunto,nombre,correo) values
            // ('$nombre,'$apellido','$asunto','$mensaje')");
            if ($insert) {
                echo 'Usuario Registrado Correctamente';
            } else {
                echo 'error';
            }
           
        }


// hola





?>