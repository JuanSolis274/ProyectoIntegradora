<?php
  
  include 'conexion_be.php';

$nombre_completo = $_POST['nombre_completo'];
$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];

$query = "INSERT INTO usuarios(nombre, correo, contrasena)
          VALUES ('$nombre_completo', '$correo', '$contrasena')";
          
  $ejecutar = mysqli_query($conexion, $query);

  if($ejecutar){
         echo'
           <script>
              
               alert("Usuario Almacenado Exitosamente");
               window.location = "../usuario.php";
                 
           </script>         
         ';
  }  else{
    echo'
      <script>
         
          alert("Registro Fallido, Intentelo de nuevo");
          window.location = "../usuario.php";
            
      </script>         
    ';
}

?>