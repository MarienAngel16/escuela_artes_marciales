<?php
session_start();
include_once "config/database.php";

if ($conexion) {
    // Verifica si se enviaron datos mediante POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Después de autenticar al usuario:        
        $usuario = $conexion->real_escape_string($_POST['usuario']);
        $contrasena = $conexion->real_escape_string($_POST['contrasena']);

        // Consulta para verificar el usuario y obtener su ID
        $sql = "SELECT * FROM Usuarios WHERE usuario = '$usuario' AND contrasena = '$contrasena'";
        $resultado = $conexion->query($sql);

        if ($resultado->num_rows > 0) {
            $fila = $resultado->fetch_assoc();
            $Id_usuario = $fila['Id_usuario'];

             // Almacena los datos del usuario en la sesión
             $_SESSION['usuario'] = [
                'Id_usuario' => $Id_usuario,
                'nombre' => $fila['nombre'],
                'telefono' => $fila['telefono'],
                'email' => $fila['email']
            ];

            // Consulta para obtener el rol del usuario
            $sql_rol = "SELECT Roles.Id_rol FROM Roles
                        INNER JOIN usuario_rol ON usuario_rol.Id_rol = Roles.Id_rol
                        WHERE usuario_rol.Id_usuario = $Id_usuario";
            $resultado_rol = $conexion->query($sql_rol);

            if ($resultado_rol->num_rows > 0) {
                $fila_rol = $resultado_rol->fetch_assoc();
                $tipo_rol = $fila_rol['Id_rol'];
                $_SESSION['usuario']['rol'] = $tipo_rol; // Guarda el rol en la sesión también
                // Mostrar alerta según el rol y redireccion a mi cuenta
                if ($tipo_rol == 1) {
                    echo "<script>alert('Inicio de sesión correctamente como Guardian'); window.location.href = 'mi_cuenta.php';</script>";
                } elseif ($tipo_rol == 2) {
                    echo "<script>alert('Inicio de sesión correctamente como Directivo'); window.location.href = 'mi_cuenta.php';</script>";
                } elseif ($tipo_rol == 3) {
                    echo "<script>alert('Inicio de sesión correctamente como Secretario'); window.location.href = 'mi_cuenta.php';</script>";
                } elseif ($tipo_rol == 4) {
                    echo "<script>alert('Inicio de sesión correctamente como Instructor'); window.location.href = 'mi_cuenta.php';</script>";
                } else {
                    echo "<script>alert('Rol desconocido'); window.location.href = 'login.php';</script>";
                }
            } else {
                echo "Error: Rol no encontrado para el usuario.";
            }
        } else {
            echo "Usuario o contraseña incorrectos";
        }
    }
} else {
    die("Error: No se pudo conectar a la base de datos.");
}

$conexion->close();
?>