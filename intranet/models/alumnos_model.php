<?php 
class AlumnoModel{
    private $base;

    public function __construct($conexion){
        $this->base = $conexion;
    }

    public function __altaAlumno($nombre,$correo,$edad,$direccion,$tel_propio,$tel_emergencia,$id_grupo){
        $sql ="INSERT INTO Alumnos (al_nombre,al_email,al_edad,al_direccion,al_telefono_propio,al_telefono_emergencia,Id_Grupo ) VALUES (null,'$nombre','$correo','$edad','$direccion','$tel_propio','$tel_emergencia','$id_grupo');";
        $consulta= $this->base->query($sql); #EJECUTA LA SENTENCIA
        if($consulta){
            #LA CONSULTA SE HIZO CORRECTAMENTE
            return true;
        }else{
            #LA CONSULTA NO SE HIZO CORRECTAMENTE
            return false;
        }
    }
    public function __buscarGrupo($id){
        $sql = "SELECT * FROM Alumnos WHERE Id_alumno =$id;";
        $consulta = $this->base->query($sql);
        if($consulta->num_rows == 0){
            #NO existe el grupo  
            return true;
        }else{
            #Existe el  grupo 
            return false;
        }
    }
}
?>