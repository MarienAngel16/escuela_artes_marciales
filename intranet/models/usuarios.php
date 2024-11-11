<?php

//MODELS
/* En el apartado de modelo se debe de manejar la interacción con la base de datos. Aquí se define 
como se accede y modifica la información de la tabla Usuarios */

class UsuarioModel {
    private $conexion;
    private $datos;

    // Constructor para establecer la conexión a la base de datos
    public function __construct($db) {
        $this->conexion = $db;
        $this->datos = array();
    }

    // Método para verificar si un usuario ya existe
    public function buscarUsuario($nombre, $contrasena) {
        $query = "SELECT * FROM Usuarios WHERE nombre=? AND contrasena=?";
        $stmt = $this->conexion->prepare($query);
        $stmt->bind_param('ss', $nombre, $contrasena);
        $stmt->execute();
        $resultado = $stmt->get_result();
        return $resultado->num_rows > 0;
    }

// Método para insertar un nuevo usuario y vincularlo con un rol
public function altaUsuario($usuario, $nombre, $telefono, $correo, $direccion, $contrasena, $rol, $sede) {

    // Inserta el usuario en la tabla Usuarios
    $query = "INSERT INTO Usuarios (usuario, nombre, telefono, email, direccion, contrasena) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $this->conexion->prepare($query);
    $stmt->bind_param('ssssss', $usuario, $nombre, $telefono, $correo, $direccion, $contrasena);
    
    if ($stmt->execute()) {
        // Obtener el ID del usuario recién creado
        $idUsuario = $stmt->insert_id;

        // Inserta la relación en la tabla usuario_rol
        $queryRol = "INSERT INTO usuario_rol (Id_usuario, Id_rol) VALUES (?, ?)";
        $stmtRol = $this->conexion->prepare($queryRol);
        $stmtRol->bind_param('ii', $idUsuario, $rol); // El rol se pasa desde el formulario

        if ($stmtRol->execute()) {           
        } else {
            /* echo "Error al insertar en usuario_rol: " . $stmtRol->error . "<br>"; */
            return false;
        }

        // Inserta la relación en la tabla sede_usuario
        $querySede = "INSERT INTO sede_usuario (Id_sede, Id_usuario) VALUES (?, ?)";
        $stmtSede = $this->conexion->prepare($querySede);

        if (!$stmtSede) {
            /* echo "Error al preparar la consulta sede_usuario: " . $this->conexion->error . "<br>"; */
            return false;
        }

        $stmtSede->bind_param('ii', $sede, $idUsuario); // La sede se pasa a la tabla

        if ($stmtSede->execute()) {           
            return true;  // Todo insertado correctamente
        } else {
            /* echo "Error al insertar en sede_usuario: " . $stmtSede->error . "<br>"; */
            return false;
        }

    } else {
        // Manejar el error de la inserción en la tabla Usuarios
        /* echo "Error al insertar en Usuarios: " . $stmt->error . "<br>"; */
        return false;
    }
}

    public function __getInstructor(){
        $sql = "SELECT us.Id_usuario, us.Nombre FROM Usuarios AS us INNER JOIN usuario_rol AS usrol ON  us.Id_usuario = usrol.Id_usuario WHERE usrol.Id_rol = 4;";
        $consulta = $this->conexion->query($sql);
        if($consulta->num_rows == 0){
            $this->datos[0]="Non";
            return $this->datos;
        }else{
            $i=0;
            while($filas = $consulta->fetch_assoc()){
                $this->datos[$i] = $filas;
                $i++;
            }
            return $this->datos;
        }
    }

}
?>