<?php
require_once "../../config/database.php";
require_once "../models/grupos_model.php";
require_once "../models/usuarios.php";
class GrupoController{
    private $datos;
    private $conexion;
    private $usuario_model;
    private $grupo_model;
    
    public function __construct($db){
        #this->datos =  array(); # Datos de los usuarios 
        $this->conexion = $db;
        $this->usuario_model = new UsuarioModel($this->conexion);
        $this->grupo_model = new GrupoModel($this->conexion)
    }
    public function __imprimirInstructor(){
        $html; #Mi variable $html contiene codigo html de los datos necesarios
        $this->datos = $this->usuario_model->__getInstructor(); #SE OBTIENE LOS INSTRUCTORES
        $numero_filas = count($datos); 
        if($numero_filas == 1 && $this->datos[0] == "Non"){
            $html=<<<EOT
            <select name='instructor'>
                <option value='non'>No existen Instructores</option>
            </select>
            <input type='submit' name='nuevo_grupo' value'instructor' disable='true'/>
            EOT;
        }else{
            #Si hay instructor
            $html = "<select name='instructor'>";
            for($c=0 ;c<$numero_filas;$c++){
                $html .=<<<EOT
                <option value='{$this->datos[c]['Id_usuario']}'>{$this->datos[$c]['Nombre']}</option>
                EOT;
            }
            $html .=<<<EOT
            </select>
            <input type='submit' name='nuevo_grupo' value'instructor'/>
            EOT;
        }
    }
    public function __registrarGrupo(){
        if(isset($_POST['nuevo_grupo'])){
            $numero = $_POST['numero'];
            $disciplina = $_POST['disciplina'];
            $horario = $_POST['horario'];
            $sala = $_POST['sala'];
            $cupo = $_POST['cupo'];
            $id_usuario = $_POST['instructor'];
            $consulta = $this->grupo_model->__altaGrupo($numero,$disciplina,$horario,$sala,$cupo,$id_usuario);
            if(!consulta){
                echo "<script>alert('Error No se pudo hacer el alta de grupo')</script>";
            }
            echo "<script>alert('El grupo de ".$disciplina." se guardo correctamente')</script>";
        }
    }
}
$gpo = new GrupoController($conexion);
$gpo->__registrarGrupo();
$gpo->__imprimirInstructor();


#Llamar a la vista de registrar grupo 
require_once "../views/grupos/create_view.php";
?>