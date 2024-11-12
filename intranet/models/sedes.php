<?php

//MODELS
/* En el apartado de modelo se debe de manejar la interacción con la base de datos. Aquí se define 
como se accede y modifica la información de la tabla Usuarios */

class SedeModel {
    private $conexion;

    // Constructor para establecer la conexión a la base de datos
    public function __construct($db) {
        $this->conexion = $db;
    }

    // Método para verificar si un usuario ya existe
    public function buscarSede($nombre_sede, $pais) {
        $query = "SELECT * FROM Sedes WHERE Nombre_sede=? AND   Pais=?";
        $stmt = $this->conexion->prepare($query);
        $stmt->bind_param('ss', $nombre_sede, $pais);
        $stmt->execute();
        $resultado = $stmt->get_result();
        return $resultado->num_rows > 0;
    }

// Método para insertar un nuevo usuario y vincularlo con un rol
public function altaSede($nombre_sede, $pais, $direccion, $telefono) {
    // Inserta el usuario en la tabla Usuarios
    $query = "INSERT INTO Sedes (Nombre_sede, Pais, Direccion, Telefono) VALUES (?, ?, ?, ?)";
    $stmt = $this->conexion->prepare($query);
    $stmt->bind_param('ssss', $nombre_sede, $pais, $direccion, $telefono);
    
    if ($stmt->execute()) {

        // Inserción correcta de los datos de la sede
        echo "Inserción correcta de la sede";
        return true;

    } else {
        // Manejar el error de la inserción en la tabla Usuarios
        echo "Error al insertar una sede: " . $this->conexion->error;
        return false;
    }
}

/* Función para desplegar sedes */
public function __getSede(){
    $sql = "SELECT * FROM Sedes";
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