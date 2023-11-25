<?php
use MyApp\data\Database;
require("vendor/autoload.php");
$db = new Database;

if ($_POST["sendMessageButton"]){
 
            $nombre=$_POST["name"];
            $apellido=$_POST["email"];
            $asunto=$_POST["subject"];
            $mensaje=$_POST["message"];
            $insertQuery="insert into opiniones (opinion,asunto,nombre,correo) values('$nombre,'$apellido','$asunto','$mensaje')";
            $insert=$db->execQuery($insertQuery);
            if ($insert) {
                echo 'Usuario Registrado Correctamente';
            } else {
                echo 'error';
            };
           
        }








?>