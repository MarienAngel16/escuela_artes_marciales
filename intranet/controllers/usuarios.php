<?php

//CONTROLADOR

/* El controlador maneja la lógica del flujo de la aplicación. 
En este caso, recibirá los datos del formulario (vista) y llamará 
al modelo para hacer la lógica de negocio, como verificar si 
el usuario ya existe y agregar un nuevo usuario.*/

include_once "../../config/database.php";   
include_once "../models/usuarios.php";

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

                    echo '
                    <div class="modal" tabindex="-1" role="dialog">
                         <div class="modal-dialog" role="document">
                             <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title">Alta Usuario</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                 </button>
                                </div>
                                  <div class="modal-body">
                                      <p>Inserción de usuario exitosa</p>
                                  </div>
                                  <div class="modal-footer">                              
                                      <button type="button" class="btn btn-danger" data-dismiss="modal"><b>Cerrar</b></button>
                                  </div>
                             </div>
                        </div>
                    </div>
                    ';

                } else {

                    echo '
                    <div class="modal" tabindex="-1" role="dialog">
                         <div class="modal-dialog" role="document">
                             <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title">Alta Usuario</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                 </button>
                                </div>
                                  <div class="modal-body">
                                      <p>Error al insertar usuario</p>
                                  </div>
                                  <div class="modal-footer">                              
                                      <button type="button" class="btn btn-danger" data-dismiss="modal"><b>Cerrar</b></button>
                                  </div>
                             </div>
                        </div>
                    </div>
                    ';

                }
            }
        }else {
            echo '
            <div class="row" style="display: block;">
            <h3 style="margin:5%  auto; color: #003D79; font-size: 300%; text-align: center;">
            No se pudo guardar  por que no se recibieron los parámetros necesarios  
            </h3>
            </div>';
        }
    }
}

// Reutiliza la conexión a la base de datos desde database.php
$usuarioController = new UsuarioController($conexion);
$usuarioController->registrarUsuario();
?>
