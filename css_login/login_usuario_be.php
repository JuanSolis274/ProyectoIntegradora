<?php

  session_start();

  //include 'conexion_be.php';//
  
  $correo = $_POST['correo'];
  $contrasena = $_POST['contrasena'];

  //encriptamiento//
  $contrasena = hash('sha512', $contrasena); 

  $consulta= "SELECT * FROM usuarios WHERE correo='$correo' and contrasena='$contrasena'";
  $resultado=mysqli_query($conexion, $consulta );

  $filas=mysqli_fetch_array($resultado);

//Inicio Sesion//
  if($filas['id_car']==0){
    $_SESSION['usuario'] = $correo; 

    header ("location: ../Shop.php");
   

  }else{
     echo '
        <script>
            alert("Usuario No Existe, Por Favor Verifique Los Datos Introduccion");
            window.location = "../usuario.php";            
        
        </script>
     
     
     ';
     
  }

?>