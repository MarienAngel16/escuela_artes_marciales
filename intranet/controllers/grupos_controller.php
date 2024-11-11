<?php
/*
Existe un problema cuando los controladores estan siendo llamados desde el
index, ya que la ruta cambia desde su llamado en index.php. 
solución: usar la constante __DIR__."RUTA"
*/
require_once __DIR__."/../../config/database.php";
require_once __DIR__."/../models/grupos_model.php";
require_once __DIR__."/../models/usuarios.php";
class GrupoController{
    private $datos;
    private $conexion;
    private $usuario_model;
    private $grupo_model;
    
    public function __construct($db){
        #this->datos =  array(); # Datos de los usuarios 
        $this->conexion = $db;
        $this->usuario_model = new UsuarioModel($this->conexion);
        $this->grupo_model = new GrupoModel($this->conexion);
    }
    public function __imprimirInstructor(){
        $html="<div class='mb-3'>"; #Mi variable $html contiene codigo html de los datos necesarios
        $this->datos = $this->usuario_model->__getInstructor(); #SE OBTIENE LOS INSTRUCTORES
        $numero_filas = count($this->datos); 
        if($numero_filas == 1 && $this->datos[0] == "Non"){
            $html.=<<<EOT
            <select name='instructor' class='form-select form-select-sm'>
                <option value='non' selected>No existen Instructores</option>
            </select>
            </div>
            <div class='mb-3'>
                <input type='submit' class='btn' name='deshabilitado' value'Enviar' disable='true'/>
            </div>
            EOT;
        }else{
            #Si hay instructor
            $html.= "<select name='instructor' class='form-select form-select-sm'> <option selected>Selecciona al Instructor</option>";
            for($c=0 ;$c<$numero_filas;$c++){
                $html .=<<<EOT
                <option value='{$this->datos[$c]['Id_usuario']}'>{$this->datos[$c]['Nombre']}</option>
                EOT;
            }
            $html .=<<<EOT
            </select>
            </div>
            <div class='mb-3'>
                <input type='submit' class='btn btn-danger' name='nuevo_grupo' value='instructor'/>
            </div>
            EOT;
        }
        return $html;
    }
    public function __registrarGrupo(){
        if(isset($_POST['nuevo_grupo'],$_POST['numero'],$_POST['disciplina'],$_POST['horario'],$_POST['sala'],$_POST['cupo'],$_POST['instructor'])){
            $numero = mysqli_real_escape_string($this->conexion,$_POST['numero']);
            $disciplina = mysqli_real_escape_string($this->conexion,$_POST['disciplina']);
            $horario = mysqli_real_escape_string($this->conexion,$_POST['horario']);
            $sala = mysqli_real_escape_string($this->conexion,$_POST['sala']);
            $cupo = mysqli_real_escape_string($this->conexion,$_POST['cupo']);
            $id_usuario = mysqli_real_escape_string($this->conexion,$_POST['instructor']);
            $consulta = $this->grupo_model->__altaGrupo($numero,$disciplina,$horario,$sala,$cupo,$id_usuario);
            if(!$consulta){
                echo "<script>alert('Error No se pudo hacer el alta de grupo')</script>";
            }else{
                echo "<script>alert('El grupo de ".$disciplina." se guardo correctamente')</script>";
            }
        }
    }
}
$gpo = new GrupoController($conexion);
$gpo->__registrarGrupo();
$html = $gpo->__imprimirInstructor();

#Llamar a la vista de registrar grupo 
require_once "create_view.php";
?>