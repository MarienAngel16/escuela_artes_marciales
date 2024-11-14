<?php
/*
Existe un problema cuando los controladores estan siendo llamados desde el
index, ya que la ruta cambia desde su llamado en index.php. 
solución: usar la constante __DIR__."RUTA"
*/
require_once __DIR__."/../../config/database.php";
require_once __DIR__."/../models/grupos_model.php";
require_once __DIR__."/../models/usuarios.php";
require_once __DIR__."/../models/sedes.php";

class GrupoController{
    private $datos;
    private $conexion;
    private $usuario_model;
    private $grupo_model;
    private $sede_model;
    
    public function __construct($db){
        #this->datos =  array(); # Datos de los usuarios 
        $this->conexion = $db;
        $this->usuario_model = new UsuarioModel($this->conexion);
        $this->grupo_model = new GrupoModel($this->conexion);
        $this->sede_model = new SedeModel($this->conexion);
    }

    public function index() {
        // Llamamos a la función getAllGroups del modelo para obtener todos los grupos
        $groups = $this->grupo_model->getAllGroups();
        
        // Incluimos la vista
        require 'mostrar_view.php';
    }

    public function showStudents($groupId) {
        // Obtenemos los alumnos por grupo usando el modelo
        $students = $this->grupo_model->getStudentsByGroup($groupId);
        
        // Devolvemos los datos en formato JSON
        header('Content-Type: application/json');
        echo json_encode($students);
    }

    public function __imprimirInstructor(){

        $html_instructor="<div class='mb-3'>"; #Mi variable $html_instructor contiene codigo html de los datos necesarios
        $this->datos = $this->usuario_model->__getInstructor(); #SE OBTIENE LOS INSTRUCTORES
        $numero_filas = count($this->datos); 
        if($numero_filas == 1 && $this->datos[0] == "Non"){
            $html_instructor.=<<<EOT
            <select name='instructor' class='form-select form-select-sm'>
                <option value='non' selected>No existen Instructores</option>
            </select>
            </div>
            EOT;
        }else{
            #Si hay instructor
            $html_instructor.= "<select name='instructor' class='form-select form-select-sm'> <option selected>Selecciona al Instructor</option>";
            for($c=0 ;$c<$numero_filas;$c++){
                $html_instructor .=<<<EOT
                <option value='{$this->datos[$c]['Id_usuario']}'>{$this->datos[$c]['Nombre']}</option>
                EOT;
            }
            $html_instructor .=<<<EOT
            </select>
            </div>
            EOT;
        }
        return $html_instructor;
    }

    public function __imprimirSede(){

        $html_sede="<div class='mb-3'>"; #Mi variable $html_sede contiene codigo html de los datos necesarios
        $this->datos = $this->sede_model->__getSede(); #SE OBTIENE LAS SEDES
        $numero_filas = count($this->datos); 
        if($numero_filas == 1 && $this->datos[0] == "Non"){
            $html_sede.=<<<EOT
            <select name='sede' class='form-select form-select-sm'>
                <option value='non' selected>No existen Sedes</option>
            </select>
            </div>
            EOT;
        }else{
            #Si hay sede
            $html_sede.= "<select name='sede' class='form-select form-select-sm'> <option selected>Selecciona la Sede</option>";
            for($c=0 ;$c<$numero_filas;$c++){
                $html_sede .=<<<EOT
                <option value='{$this->datos[$c]['Id_sede']}'>
                 {$this->datos[$c]['Id_sede']}, 
                 {$this->datos[$c]['Nombre_sede']}, 
                 {$this->datos[$c]['Pais']}            
                </option>
                EOT;
            }
            $html_sede .=<<<EOT
            </select>
            </div>
            EOT;
        }
        return $html_sede;
    }             
     
    

    public function __registrarGrupo(){
        if(isset($_POST['nuevo_grupo'],$_POST['numero'],$_POST['disciplina'],$_POST['horario'],$_POST['sala'],$_POST['cupo'],$_POST['instructor'],$_POST['sede'])){
            $numero = mysqli_real_escape_string($this->conexion,$_POST['numero']);
            $disciplina = mysqli_real_escape_string($this->conexion,$_POST['disciplina']);
            $horario = mysqli_real_escape_string($this->conexion,$_POST['horario']);
            $sala = mysqli_real_escape_string($this->conexion,$_POST['sala']);
            $cupo = mysqli_real_escape_string($this->conexion,$_POST['cupo']);
            $id_usuario = mysqli_real_escape_string($this->conexion,$_POST['instructor']);
            $id_sede = mysqli_real_escape_string($this->conexion,$_POST['sede']);

            $consulta = $this->grupo_model->__altaGrupo($numero,$disciplina,$horario,$sala,$cupo,$id_usuario,$id_sede);
            if(!$consulta){
                echo "<script>alert('Error No se pudo hacer el alta de grupo')</script>";
            }else{
                echo "<script>alert('El grupo de ".$disciplina." se guardo correctamente')</script>";
            }
        }else{
            echo "<script>alert('No se recibieron todos los parametros')</script>";

        }
    }
}
$gpo = new GrupoController($conexion);
$gpo->__registrarGrupo();
$html_instructor = $gpo->__imprimirInstructor();
$html_sede = $gpo->__imprimirSede();

#Llamar a la vista de registrar grupo 
/* require_once "create_view.php"; */
?>