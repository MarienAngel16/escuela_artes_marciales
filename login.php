<?php
session_start();
include_once "config/database.php";

if ($conexion) {
    // Verifica si se enviaron datos mediante POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $usuario = $conexion->real_escape_string($_POST['usuario']);
        $contrasena = $conexion->real_escape_string($_POST['contrasena']);

        // Consulta para verificar el usuario
        $sql = "SELECT * FROM Usuarios WHERE usuario = '$usuario' AND contrasena = '$contrasena'";
        $resultado = $conexion->query($sql);

        if ($resultado->num_rows > 0) {
          include_once "dashboard.php";
            echo "Si se conecta";
            
        } else {
            echo "Usuario o contraseña incorrectos";
        }
    }
} else {
    die("Error: No se pudo conectar a la base de datos.");
}

$conexion->close();
?>
