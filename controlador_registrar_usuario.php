<?php
use MyApp\data\Database;
require("vendor/autoload.php");
$db = new Database;

if (!empty ($_POST["sendMessageButton"])){
    if (empty($_POST["name"]) or empty($_POST["email"])
    or empty($_POST["subject"]) or empty($_POST["message"])) {
        echo 'Uno de los campos esta vacio';
        } else {
            $nombre=$_POST["name"];
            $apellido=$_POST["email"];
            $asunto=$_POST["subject"];
            $mensaje=$_POST["message"];
            $sql= $sql->query(" insert into opiniones
            (opinion,asunto,nombre,correo) values
            ('$nombre,'$apellido','$asunto','$mensaje')");
            if ($sql=1) {
                'Usuario Registrado Correctamente';
            } else {
                'error';
            }
           
        }
}

// hola





?>