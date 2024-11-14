<?php 
class AlumnoModel{
    private $base;

    public function __construct($conexion){
        $this->base = $conexion;
    }

    public function __altaAlumno($nombre,$correo,$edad,$direccion,$tel_propio,$tel_emergencia,$id_grupo){
        $sql ="INSERT INTO Alumnos (Id_alumno,al_nombre,al_email,al_edad,al_direccion,al_telefono_propio,al_telefono_emergencia,Id_Grupo ) VALUES (null,'$nombre','$correo','$edad','$direccion','$tel_propio','$tel_emergencia','$id_grupo');";
        $consulta= $this->base->query($sql); #EJECUTA LA SENTENCIA
        if($consulta){
            #LA CONSULTA SE HIZO CORRECTAMENTE
            return true;
        }else{
            #LA CONSULTA NO SE HIZO CORRECTAMENTE
            return false;
        }
    }
    public function __buscarAlumno($nombre,$correo){
        $query = "SELECT * FROM Alumnos WHERE al_nombre=? AND al_email=?";
        $stmt = $this->base->prepare($query);
        $stmt->bind_param('ss', $nombre, $correo);
        $stmt->execute();
        $resultado = $stmt->get_result();
        return $resultado->num_rows > 0;

    }
}
?>