<?php

  $conexion = mysqli_connect("localhost", "root", "1234", "capri");

  if($conexion){
    echo 'Conectado exitosamente';
  }else{
    echo 'No se ha conectado';
  }




?>