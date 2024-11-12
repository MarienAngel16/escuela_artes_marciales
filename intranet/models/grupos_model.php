<?php 
class GrupoModel{
    private $base;

    public function __construct($conexion){
        $this->base = $conexion;
    }

    public function __altaGrupo($numero,$disciplina,$horario,$sala,$cupo,$id_usuario,$id_sede){

        //Inserta un grupo en la tabla de Grupos
        $query = "INSERT INTO Grupos (Numero_grupo, Disciplina, Horario, Sala, Cupo, Id_usuario) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $this->base->prepare($query);
        $stmt->bind_param('ssssss', $numero, $disciplina, $horario, $sala, $cupo, $id_usuario); 

        if($stmt->execute()){

            // Obtener el ID del grupo recién creado
            $idGrupo = $stmt->insert_id;

            // Inserta la relación en la tabla sede_grupos
            $querySede = "INSERT INTO sede_grupos (Id_sede, Id_grupo) VALUES (?, ?)";
            $stmtSede = $this->base->prepare($querySede);
            $stmtSede->bind_param('ii', $id_sede, $idGrupo); // La Sede se pasa desde el formulario

            if (!$stmtSede) {
            /* echo "Error al preparar la consulta sede_grupo: " . $this->conexion->error . "<br>"; */
            return false;
            }

            if ($stmtSede->execute()) {           
            return true;  // Todo insertado correctamente
            } else {
            /* echo "Error al insertar en sede_grupo: " . $stmtSede->error . "<br>"; */
            return false;
            }

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