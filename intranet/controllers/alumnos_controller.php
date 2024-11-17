<?php 

require_once __DIR__."/../../config/database.php";
require_once __DIR__."/../models/alumnos_model.php";
require_once __DIR__."/../models/grupos_model.php";

class AlumnoController{
    private $datos;
    private $conexion;   
    private $alumno_model;
    private $grupo_model;

    public function __construct($db){        
        $this->conexion = $db;
        $this->grupo_model = new GrupoModel($this->conexion);
        $this->alumno_model = new AlumnoModel($this->conexion);
    }


    public function __imprimirGrupos(){
        $html_grupos="<div class='mb-3'>"; #Variable con código para mostrar datos
        $this->datos = $this->grupo_model->__getGrupos(); #Obtiene los grupos
        $numero_filas = count($this->datos); 
        if($numero_filas == 1 && $this->datos[0] == "Non"){
            $html_grupos.=<<<EOT
            <select name='grupo1' class='form-select form-select-sm'>
                <option value='non' selected>No existen grupos registrados</option>
            </select>
            </div>
            <div class='mb-3'>
                <input type='submit' class='btn' name='deshabilitado' value='Enviar' disabled='true'/>
            </div>
            EOT;
        }else{
            #Si hay grupos
            $html_grupos.= "<select name='grupo1' class='form-select form-select-sm'> <option selected>Grupo a Escoger</option>";
            for($c=0 ;$c<$numero_filas;$c++){
                $html_grupos .=<<<EOT
                 <option value="{$this->datos[$c]['Id_grupo']}">
                 {$this->datos[$c]['Numero_grupo']}, 
                 {$this->datos[$c]['Disciplina']}, 
                 {$this->datos[$c]['Horario']}, 
                 {$this->datos[$c]['Sala']}, 
                 {$this->datos[$c]['Cupo']}
                 </option>

                EOT;
            }
            $html_grupos .=<<<EOT
            </select>
            </div>
            <div class='mb-3'>
                <input type='submit' class='btn btn-danger' name='nuevo_alumno' value='Enviar' />
            </div>
            EOT;
        }
        return $html_grupos;    
    }

    public function __registrarAlumno(){
        if(isset($_POST['alumno1'],$_POST['correo1'],$_POST['edad1'],$_POST['direccion1'],$_POST['telefono1'],$_POST['emergencia1'],$_POST['grupo1'])){
            $nombre = mysqli_real_escape_string($this->conexion,$_POST['alumno1']);
            $correo = mysqli_real_escape_string($this->conexion,$_POST['correo1']);
            $edad = mysqli_real_escape_string($this->conexion,$_POST['edad1']);
            $direccion = mysqli_real_escape_string($this->conexion,$_POST['direccion1']);
            $telefono = mysqli_real_escape_string($this->conexion,$_POST['telefono1']);
            $emergencia = mysqli_real_escape_string($this->conexion,$_POST['emergencia1']);
            $grupo = mysqli_real_escape_string($this->conexion,$_POST['grupo1']);

                        // Busca si el alumno ya existe en la base de datos
                        if ($this->alumno_model->__buscarAlumno($nombre, $correo)) {
                            echo "<br>El registro ya está en la BD";
                        }else{
                            $consulta = $this->alumno_model->__altaAlumno($nombre,$correo,$edad,$direccion,$telefono,$emergencia,$grupo);
                        }
            
            if(!$consulta){
                echo "<script>alert('Error No se pudo hacer el alta de grupo')</script>";
            }else{
                echo "<script>alert('El alumno se guardo correctamente')</script>";
            }
        }
    }

     #metodo run 
     public function run($accion){
        switch ($accion){
            case "crear":
                $mihtml = $this->__imprimirGrupos();
                $this->vistas($mihtml,"create");
            break;
            case "alta":
                $this->_registrarAlumno();
                $mihtml = $this->__imprimirGrupos();
                $this->vistas($mihtml,"create");                             
            break;
            default:
            break;
        }
    }
    
    public function vistas($datos, $vista){
        $html = $datos;
        require_once "intranet/views/alumnos/".$vista.".php";
    }

        public function vistas_sn($vista){        
        require_once "intranet/views/alumnos/".$vista.".php";
    }

    
}

/* $gpo = new AlumnoController($conexion);
$gpo->__registrarAlumno();
$html_grupos = $gpo->__imprimirGrupos();

#Llamar a la vista de registrar alumnos
require_once "create.php"; */
?>

