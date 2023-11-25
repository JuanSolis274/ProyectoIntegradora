<?php
use MyApp\data\Database;
require("vendor/autoload.php");
$db = new Database;

// if ($_POST){
 
//             $nombre=$_POST["name"];
//             $apellido=$_POST["email"];
//             $asunto=$_POST["subject"];
//             $mensaje=$_POST["message"];
//             $insertQuery="insert into opiniones (opinion,asunto,nombre,correo) values('$mensaje,'$mensaje','$nombre','$apellido')";
//             $insert=$db->execQuery($insertQuery);
//             if ($insert===true) {
//                 echo 'Mensasje Registrado Correctamente';
//             } else {
//                 echo 'error';exit();
//             };
           
//         }

//print_r($_POST);
// if(empty($_POST["oculto"]) || empty($_POST["txtNombre"]) || empty($_POST["txtEdad"]) || empty($_POST["txtciudad"])){
//     header('Location: index.php?mensaje=falta');
//     exit();
// }

include_once 'Database.php';
$nombre = $_POST["txtNombre"];
$edad = $_POST["txtEdad"];
$ciudad = $_POST["txtciudad"];

$sentencia = $bd->prepare("INSERT INTO persona(nombre,edad,ciudad) VALUES (?,?,?);");
$resultado = $sentencia->execute([$nombre,$edad,$ciudad]);

if ($resultado === TRUE) {
    header('Location: index.php?mensaje=registrado');
} else {
    header('Location: index.php?mensaje=error');
    exit();
}










?>