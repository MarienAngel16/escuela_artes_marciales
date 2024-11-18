<?php

//CONTROLADOR

/* El controlador maneja la lógica del flujo de la aplicación. 
En este caso, recibirá los datos del formulario (vista) y llamará 
al modelo para hacer la lógica de negocio, como verificar si 
el usuario ya existe y agregar un nuevo usuario.*/


include_once "intranet/models/sedes.php";

class sedeController {
    private $sedeModel;
    private $datos;
    private $conexion;

    // Constructor para inicializar el modelo de usuarios con la conexión de la base de datos
    public function __construct($db) {
        $this->conexion = $db;
        $this->sedeModel = new SedeModel($this->conexion);
    }

    // Método para manejar la solicitud de registro de usuario
    public function registrarSede() {
        // Verifica si se ha enviado el formulario
        if (isset($_POST["sede1"], $_POST["pais1"], $_POST["telsede1"], $_POST["dicsede1"])) {
            
            // Obtiene los datos del formulario
            $nombre_sede = $_POST["sede1"];
            $pais = $_POST["pais1"];
            $telefono = $_POST["telsede1"];
            $direccion = $_POST["dicsede1"];

            // Busca si el usuario ya existe en la base de datos
            if ($this->sedeModel->buscarSede($nombre_sede, $pais)) {
                // echo "<br>El registro ya está en la BD";
            } else {
                // Si el usuario no existe, lo inserta en la base de datos
                if ($this->sedeModel->altaSede($nombre_sede, $pais,$direccion,$telefono)) {
                    echo "<script language='javascript'> alert('Se registro la sede correctamente')</script>";
                } else {
                    echo "<script language='javascript'> alert('Error en el registro de sede')</script>";
                }
            }
        }else {
            echo "<script language='javascript'> alert('No se recibieron los parámetros adecuados')</script>";
        }
    }
    public function __visualizarSedes(){
        $html = "";//$html guarda el html para visualizar sedes
        $this->datos = $this->sedeModel->__getSede();
        $numero_filas = count($this->datos);
        if($numero_filas == 1 && $this->datos[0] == "non"){
            $html=<<<EOT
            <div class="no_sedes">
            <h2>No hay sedes guardadas<h2>
            </div>
            EOT;
        }else{
            $html=<<<EOT
            <div class="row">
            <div class="col">
            <div  class="info_sedes">
                <h2>Información de las Sedes</h2>
            </div>
            </div>
            </div>
            <div class="row">
            <div class="col">
            <table class="table">
            <thead>
            <tr></tr>
            </thead>
            <tbody>
            EOT;
            for($c=0; $c < $numero_filas; $c++){
                $html .=<<<EOT
                <tr>
                <form action="../controllers/sedes.php" method="post">
                <th scope="row">
                <div>
                    <label  class="form-label num">
                        Número 
                    </label>
                    <p>{$this->datos[$c]['Id_sede']}</p>
                    </div>
                </th>
                <td>
                <div>
                <label for="name_sede" class="form-label">
                    Nombre de la Sede
                </label>
                    <input type="text" name="name_sede" id="name_sede" value='{$this->datos[$c]['Nombre_sede']}' class="form-control">
                </div>
                </td>
                <td>
                    <div>
                        <label for="country" class="form-label">
                            Pais
                        </label>
                        <input type="text" name="country" id="country" value='{$this->datos[$c]['Pais']}' class="form-control">
                    </div>
                </td>
                <td>
                    <div>
                        <label for="address" class="form-label">
                            Dirección
                        </label>
                        <input type="text" name="address" id="address" value='{$this->datos[$c]['Direccion']}' class="form-control">
                    </div>
                </td>
                <td>
                    <div>
                        <label for="telephone" class="form-label">
                            Telefono 
                        </label>
                        <input type="text" name="telephone" id="telephone" value='{$this->datos[$c]['Telefono']}' class="form-control">
                    </div>
                </td>
                </form>
                <tr>
                EOT;
            }
            $html .=<<<EOT
            </tbody>
            </table>
            </div>
            </div>
            EOT;
        }
        return $html;
    }
    
    #metodo run 
    public function run($accion){
        switch ($accion){
            case "visualizar":
                $mihtml = $this->__visualizarSedes();
                $this->vistas($mihtml,"visualizar_sedes");
            break;
            case "crear":
                //llamar  y ver al formulario de crear 
                $this->vistas_sn("create");
            break;
            case "alta":
                $this->registrarSede();
                $this->vistas_sn("create");               
            break;
            case "modificar":
            break;
            case "eliminar":
            break;
            default:

            break;
        }
    }
    
    public function vistas($datos, $vista){
        $html = $datos;
        require_once "intranet/views/sedes/".$vista.".php";
    }

        public function vistas_sn($vista){        
        require_once "intranet/views/sedes/".$vista.".php";
    }
}

// Reutiliza la conexión a la base de datos desde database.php
/* $sedeController = new SedeController($conexion);
$sedeController->registrarSede();
$miTabla = $sedeController->__visualizarSedes(); */
?>
