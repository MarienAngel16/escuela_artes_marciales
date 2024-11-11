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
        #this->datos =  array(); # Datos de los grupos
        $this->conexion = $db;
        $this->grupo_model = new GrupoModel($this->conexion);
        $this->alumno_model = new AlumnoModel($this->conexion);
    }

    public function __imprimirGrupos(){
        $html_grupos="<div class='mb-3'>"; #Variable con código para mostrar datos
        $this->datos = $this->grupo_model->__getGrupos(); #Obtiene los grupos
        $numero_filas = count($this->datos); 
        if($numero_filas == 1 && $this->datos[0] == "Non"){
            $html.=<<<EOT
            <select name='grupo1' class='form-select form-select-sm'>
                <option value='non' selected>No existen grupos registrados</option>
            </select>
            </div>
            <div class='mb-3'>
                <input type='submit' class='btn' name='deshabilitado' value'Enviar' disable='true'/>
            </div>
            EOT;
        }else{
            #Si hay grupos
            $html_grupos.= "<select name='grupo1' class='form-select form-select-sm'> <option selected>Grupo a Escoger</option>";
            for($c=0 ;$c<$numero_filas;$c++){
                $html .=<<<EOT
                <option value='{$this->datos[$c]['Id_grupo']}'>{
                 $this->datos[$c]['Numero_grupo'],
                 $this->datos[$c]['Disciplina'],
                 $this->datos[$c]['Horario'],
                 $this->datos[$c]['Sala'],
                 $this->datos[$c]['Cupo']
                }</option>
                EOT;
            }
            $html .=<<<EOT
            </select>
            </div>
            <div class='mb-3'>
                <input type='submit' class='btn btn-danger' name='nuevo_grupo' value'instructor'/>
            </div>
            EOT;
        }
        return $html_grupos;
    
    }
}

$gpo = new AlumnoController($conexion);
$gpo->__registrarGrupo();
$html = $gpo->__imprimirInstructor();

#Llamar a la vista de registrar grupo 
require_once "create_view.php";
?>

?>