<?php 
class GrupoModel{
    private $base;

    public function __construct($conexion){
        $this->base = $conexion;
    }

    public function __altaGrupo($numero,$disciplina,$horario,$sala,$cupo,$id_usuario){
        $sql ="INSERT INTO Grupos (Id_grupo,Numero_grupo,Disciplina,Horario,Sala,Cupo,Id_usuario) VALUES (null,'$numero','$disciplina','$horario','$sala','$cupo','$id_usuario');";
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
        $sql = "SELECT * FROM grupos WHERE Id_grupo =$id;";
        $consulta = $this->base->query($sql);
        if($consulta->num_rows == 0){
            #NO existe el grupo  
            return true;
        }else{
            #Existe el  grupo 
            return false;
        }
    }

    public function __getGrupos(){
        $sql = "SELECT * FROM Grupos";
        $consulta = $this->base->query($sql);
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