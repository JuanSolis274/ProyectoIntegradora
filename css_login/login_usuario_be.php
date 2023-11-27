<?php

  session_start();

  include 'conexion_be.php';
  
  $correo = $_POST['correo'];
  $contrasena = $_POST['contrasena'];

  $validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo' 
  and contrasena='$contrasena'");

//Inicio Sesion//
  if(mysqli_num_rows($validar_login) > 0){
    $_SESSION['usuario'] = $correo; 

    header ("location: ../Shop.php");
    exit();

  }else{
     echo '
        <script>
            alert("Usuario No Existe, Por Favor Verifique Los Datos
            introduccion");
            windows.location = "../usuario.php";            
        
        </script>
     
     
     ';
     exit();
  }

?>