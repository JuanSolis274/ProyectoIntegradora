<?php
   session_start();

   if(!isset($_SESSION['usuario'])){
     echo '
       <script>
          alert("Por Favor Debes Iniciar Sesion");
          window.location = "usuario.php";
       </script>

     ';
   
     session_destroy();
     die();

   }
 
  

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

 <a href="css_login/cerrar_sesion_be.php"> CERRAR SESION</a>
    
</body>
</html>