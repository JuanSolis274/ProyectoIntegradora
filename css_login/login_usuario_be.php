<?php

  session_start();

  include 'conexion_be.php';
  
  $correo = $_POST['correo'];
  $contrasena = $_POST['contrasena'];

  //encriptamiento//
  $contrasena = hash('sha512', $contrasena); 

  $validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo' 
  and contrasena='$contrasena'");

 $filas = mysqli_fetch_array($validar_login);

//Inicio Sesion//
  if(mysqli_num_rows($validar_login) > 0){
    $_SESSION['usuario'] = $correo; 

    header ("location: ../Shop.php");
    exit();

  }elseif (mysqli_num_rows($validar_login) < 1){
    
    $_SESSION['usuario'] = $correo; 

    header ("location: ../agregar_admin.php");

  }else{
     '
     <script>
     
     alert("Inicio  Fallido, Intentelo de nuevo");
     window.location = "../usuario.php";
     
     
     </script>
     
     
     
     ';


  }

?>

?>