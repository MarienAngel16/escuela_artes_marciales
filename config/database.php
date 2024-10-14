<?php
// Datos de conexión a la base de datos
$servername = "blnth59yvhtf0vm3iylj-mysql.services.clever-cloud.com"; // Nombre del servidor 
$username = "uhns9a4gksisherq"; // Nombre de usuario de la base de datos
$password = "0brFXbVil7T8bb84vKmI"; // Contraseña de la base de datos
$dbname = "blnth59yvhtf0vm3iylj"; // Nombre de la base de datos

// Crear conexión
$conexion = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
  } 


// Cerrar conexión
 $conn->close();
?>
