<?php
  
  include 'conexion_be.php';

$nombre_completo = $_POST['nombre_completo'];
$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];

$query = "INSERT INTO usuarios(nombre, correo, contrasena)
          VALUES ('$nombre_completo', '$correo', '$contrasena')";


//EL CORREO NO SE REPITE //
  $verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo ='$correo' ");

  if(mysqli_num_rows($verificar_correo) > 0){

     echo'
        <script>s
        
             alert("Este Correo Ya Esta Registrado, Intenta Agregar Otro Diferente");  
             window.location = "../usuario.php";

        </script>
     ';

     exit();

  }


  //El NOMBRE NO SE REPITE//
  $verificar_nombre = mysqli_query($conexion, "SELECT * FROM usuarios WHERE nombre ='$nombre_completo' ");

  if(mysqli_num_rows($verificar_nombre) > 0){

    echo'
       <script>
       
            alert("Este Nombre Ya Esta Registrado, Intenta Agregar Otro Diferente");  
            window.location = "../usuario.php";

       </script>
    ';

    exit();

 }




  //ALMACENADO EXITOSO//
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

  mysqli_close($conexion);
    

?>