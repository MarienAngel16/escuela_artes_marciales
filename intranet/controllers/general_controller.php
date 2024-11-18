<?php 

class generalController{

    public function __construct() {}

    public function run ($accion){
       switch ($accion){
        case "index": 
            $this -> index ();
        break;
        case "cuenta":
            $this->view("mi_cuenta");
        break;
        case "imagen_guardian":
            $ruta ="<img src='public/images/inicios/inicio_guardian.png' class='background_img' alt='Imagen sobrepuesta' style='width:80%; margin-left:220px;'>";
            $this->view_image($ruta);
         break;
         case "imagen_directivo":
            $ruta ="<img src='public/images/inicios/inicio_director.png' class='background_img' alt='Imagen sobrepuesta' style='width:80%; margin-left:220px;'>";
            $this->view_image($ruta);
         break;
         case "imagen_secretario":
            $ruta ="<img src='public/images/inicios/inicio_secretario.png' class='background_img' alt='Imagen sobrepuesta' style='width:80%; margin-left:220px;'>";
            $this->view_image($ruta);
         break;
         case "imagen_instructor":
            $ruta ="<img src='public/images/inicios/inicio_instructor.png' class='background_img' alt='Imagen sobrepuesta' style='width:80%; margin-left:220px;'>";
            $this->view_image($ruta);
         break;
        default: 
            index ();
        break;
       }
    }

    public function index(){
         $this -> view("index");
    }

    public function view($vista){
        require_once $vista.".php";
    }
    public function view_image($ruta){
        $img = $ruta;
        require_once "intranet/views/fondos/imagen.php";
    }
}

?>