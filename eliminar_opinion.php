<?php
// Incluir el código de conexión a la base de datos
include('css_login/conexion_be.php'); // Asegúrate de reemplazar 'conexion.php' con el nombre correcto de tu archivo de conexión

$sentencia = $bd->prepare("DELETE FROM opiniones WHERE id_opiniones = ?;");
        $resultado = $sentencia -> execute([$id]);
        $sentencia = $bd->prepare("ALTER TABLE opiniones AUTO_INCREMENT = 1;");
        $resultado = $sentencia -> execute();

// Cerrar la conexión a la base de datos al finalizar el script (opcional, dependiendo de la configuración de tu aplicación)
$db->close();
?>
