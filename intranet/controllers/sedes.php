<?php

//CONTROLADOR

/* El controlador maneja la lógica del flujo de la aplicación. 
En este caso, recibirá los datos del formulario (vista) y llamará 
al modelo para hacer la lógica de negocio, como verificar si 
el usuario ya existe y agregar un nuevo usuario.*/

include_once "../../config/database.php";   
include_once "../models/sedes.php";

class sedeController {
    private $sedeModel;

    // Constructor para inicializar el modelo de usuarios con la conexión de la base de datos
    public function __construct($db) {
        $this->sedeModel = new SedeModel($db);
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
                echo "<br>El registro ya está en la BD";
            } else {
                // Si el usuario no existe, lo inserta en la base de datos
                if ($this->sedeModel->altaSede($nombre_sede, $pais, $telefono,$direccion)) {
                    echo '
                    <div class="row" style="display: block;">
                    <h3 style="margin:5%  auto; color: #003D79; font-size: 300%; text-align: center;">
                    Sede Guardada Correctamente    
                    </h3>
                    </div>';
                } else {
                    echo '
                    <div class="row" style="display: block;">
                    <h3 style="margin:5%  auto; color: #003D79; font-size: 300%; text-align: center;">
                    La Sede no se pudo guardar    
                    </h3>
                    </div>';
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
$sedeController = new SedeController($conexion);
$sedeController->registrarSede();
?>
