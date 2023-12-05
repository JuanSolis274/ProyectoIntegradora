<?php

include 'css_login/conexion_be.php';

$nombre = $_POST['nombre'];
$categoria = $_POST['categoria'];
$estatus = $_POST['estatus'];


$query = "INSERT INTO nieves(nombre, categoria, estatus)
          VALUES ('$nombre', '$categoria', '$estatus')";
          
  $ejecutar = mysqli_query($conexion, $query);

  //ALMACENADO EXITOSO//

  if($ejecutar){
         echo'
           <script>
              
               alert("Nieve Enviada Exitosamente");
               window.location = "agregar_nieves.php";
                 
           </script>         
         ';
  }  else{
    echo'
      <script>
         
          alert("Algo fallo, Intentelo de nuevo");
          window.location = "agregar_nieves.php";
            
      </script>         
    ';

}

  mysqli_close($conexion);



?>