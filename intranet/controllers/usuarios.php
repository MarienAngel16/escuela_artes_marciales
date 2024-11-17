<?php

//CONTROLADOR

/* El controlador maneja la lógica del flujo de la aplicación. 
En este caso, recibirá los datos del formulario (vista) y llamará 
al modelo para hacer la lógica de negocio, como verificar si 
el usuario ya existe y agregar un nuevo usuario.*/

include_once "intranet/models/usuarios.php";

class UsuarioController {
    private $usuarioModel;

    // Constructor para inicializar el modelo de usuarios con la conexión de la base de datos
    public function __construct($db) {
        $this->usuarioModel = new UsuarioModel($db);
    }

    // Método para manejar la solicitud de registro de usuario
    public function registrarUsuario() {
        // Verifica si se ha enviado el formulario
        if (isset($_POST["nombre1"], $_POST["usuario1"], $_POST["telefono1"], $_POST["email1"], $_POST["direccion1"], $_POST["contrasena1"],$_POST["sede1"])) {
            
            // Obtiene los datos del formulario
            $nombre = $_POST["nombre1"];
            $usuario = $_POST["usuario1"];
            $telefono = $_POST["telefono1"];
            $correo = $_POST["email1"];
            $direccion = $_POST["direccion1"];
            $contrasena = $_POST["contrasena1"];
            $rol = $_POST["rol1"];
            $sede = $_POST["sede1"];

            // Busca si el usuario ya existe en la base de datos
            if ($this->usuarioModel->buscarUsuario($nombre, $contrasena)) {
                echo "<br>El registro ya está en la BD";
            } else {
                // Si el usuario no existe, lo inserta en la base de datos
                if ($this->usuarioModel->altaUsuario($usuario, $nombre, $telefono, $correo, $direccion, $contrasena,$rol,$sede)) {
                    echo "<script>alert('Inserción Exitosa')</script>";
                } else {
                    echo "<script>alert('Error en la inserción')</script>";
                }
            }
        }else {
            echo "<script>alert('No llegaron todos los parámetros')</script>";
        }
    }

    public function __imprimirSede(){
        $html_sede="<div class='mb-3'>"; #Mi variable $html_sede contiene codigo html de los datos necesarios
        $this->datos = $this->usuarioModel->__getSede(); #SE OBTIENE LAS SEDES
        $numero_filas = count($this->datos); 
        if($numero_filas == 1 && $this->datos[0] == "Non"){
            $html_sede.=<<<EOT
            <label for="sede1" class="form-label">Sede a Elegir</label>
            <select name='sede1' class='form-select form-select-sm'>
                <option value='non' selected>No existen Sedes</option>
            </select>
            </div>
            EOT;
        }else{
            #Si hay sede
            $html_sede.= "<label for='sede1' class='form-label'>Sede a Elegir</label> <select name='sede1' class='form-select form-select-sm'> <option selected>Selecciona la Sede</option>";
            for($c=0 ;$c<$numero_filas;$c++){
                $html_sede .=<<<EOT
                <option value='{$this->datos[$c]['Id_sede']}'>
                 {$this->datos[$c]['Id_sede']} -
                 {$this->datos[$c]['Nombre_sede']}            
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
    public function __imprimirUsuarios(){
        $html_usuario=""; #Mi variable $html_sede contiene codigo html de los datos necesarios
        $this->datos = $this->usuarioModel->__getUsuario(); 
        $numero_filas = count($this->datos); 
        if($numero_filas == 1 && $this->datos[0] == "Non"){
            $html_usuario.=<<<EOT
            <tr>
            <td>0</td>
            <td>Sin registro</td>
            <td>Sin registro</td>
            <td>Sin registro</td>
            <td>Sin registro</td>
            </tr>
            EOT;
        }else{
            #Si hay usuarios
            for($c=0 ;$c<$numero_filas;$c++){
                $html_usuario .=<<<EOT
                <tr>
                <td>{$this->datos[$c]['Id_usuario']}</td>
                <td>{$this->datos[$c]['nombre']}</td>
                <td>{$this->datos[$c]['telefono']}</td>
                <td>{$this->datos[$c]['email']}</td>
                <td>{$this->datos[$c]['direccion']}</td>
                </tr>
                EOT;
            }
        }
        return $html_usuario;
    } 
    #metodo run 
    public function run($accion){
        switch ($accion){
            case "visualizar":
                //llamar  y ver al formulario de visualizar
                $datos = $this->__imprimirUsuarios();
                 $this->vistas($datos,"view");                
            break;
            case "crear":
                //llamar  y ver al formulario de crear 
                $datos = $this->__imprimirSede();
                $this->vistas($datos,"create");
            break;
            case "alta":
                $this->registrarUsuario();
                //llamar  y ver al formulario de crear 
                $datos = $this->__imprimirSede();
                $this->vistas($datos,"create");
            break;

            default:
            break;
        }
    }
    
    public function vistas($datos, $vista){
        $html = $datos;
        require_once "intranet/views/usuarios/".$vista.".php";
    }

        public function vistas_sn($vista){        
        require_once "intranet/views/usuarios/".$vista.".php";
    }

}

// Reutiliza la conexión a la base de datos desde database.php
// $usuarioController = new UsuarioController($conexion);
// $usuarioController->registrarUsuario();
?>
