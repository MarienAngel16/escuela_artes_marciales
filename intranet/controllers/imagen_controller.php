<?php 

class imagenController{

    public function __construct() {
        
        
    }

    public function run ($accion){
       switch ($accion){
        case "index": 
            $this -> index ();
        break;
        case "cuenta":
            $this->view("mi_cuenta");
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
}

?>