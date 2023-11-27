<?php
session_start();
if(!isset($_SESSION['usuario'])){
  echo'
     <script>
     alert("Por Favor Debes Iniciar Sesion Para Continuar La Compra") 
      
     
     </scipt>
  ';
   header("location: usuario.php");
   session_destroy();
   die();
}
session_destroy();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito De Compra</title>
</head>
<body>

 <h1>Bienvenido Al Carrito De Compra </h1>
 <p>Posdata aun no existe</p>
    
</body>
</html>