<?php 

class generalController{

    public function __construct() {
        
        
    }

    public function run ($action){
       switch ($action){

        case "index": 
            $this -> index ();
            break;
            default: index ();
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