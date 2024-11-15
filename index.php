<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Usuario</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>

  <link rel="stylesheet" href="public/css/style">

  <body>

  <?php 
/*   Verificación de inicio de sesión en cada página */
  session_start();

  if (!isset($_SESSION['usuario'])) {
       ?>

<div class="container">

 <form class="form-group" action="login.php" method="POST">

<div class="bg p-5 border border-5 border-dark rounded">
<!--imagen institutcional-->
<img class="imagen" src="public/images\LogoRojo.png">
<!--usuario-->
       <div class="field">
                <label for="usuario" class="form-label mt-3 fw-semibold">Usuario</label>
                <input type="text" class="form-control" name="usuario" placeholder="Ingresa el usuario asignado">
         </div>
<!--contraseña-->
        <div class="field">
                 <label for="contrasena" class="form-label mt-3 fw-semibold">Contraseña</label>
                 <input type="password" class="form-control" name="contrasena" placeholder="Ingresa la contraseña asignada">
        </div>
<!--boton-->

<input type="submit" class="form-control btn-color fw-semibold mt-3">
 
<!--visualizar grupos-->
<p class="mb-3"></p>
  <a class="lista" href="https://www.mozilla.org/es-ES/">Visualizar grupos únicamente</a>  

</div>
 </form>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>


      <?php
      
  } else {     
     

      switch ($_SESSION['usuario']['rol']){

        case (1):
          include_once "/escuela_artes_marciales/intranet/views/shared/header_guardian.php";
          break;
        case (2):
            include_once "/escuela_artes_marciales/intranet/views/shared/header_director.php";
            break;
        case (3):
            include_once "intranet/views/shared/header_secretario.php";
            break;
        case (4):
            include_once "/escuela_artes_marciales/intranet/views/shared/header_instructor.php";
            break;
        default:
            include_once "/escuela_artes_marciales/intranet/views/shared/header_instructor.php";
            break;
            
      }

      if(isset($_GET["controller"])){
        // We load the instance of the corresponding controller
        echo "hola";
        $controllerObj=cargarControlador($_GET["controller"]);
        //We launch the action
        launchAction($controllerObj);
        }else{
          echo "adios";
        // We load the default controller instance
        $controllerObj=cargarControlador("general");
        // We launch the action
        launchAction($controllerObj);
    }

      

    

    require_once "mi_cuenta.php"; 
    /* print_r($_SESSION['usuario']); */


    include_once "intranet/views/shared/footer.php";




    
    
    // session_unset(); // Eliminar todas las variables de sesión.
    // session_destroy(); // Destruir la sesión.
    // exit; 

  }

  function cargarControlador($controller){
    include_once "config/database.php";  
    switch ($controller) {
        case 'sedes':
            $strFileController='intranet/controllers/sedes.php';
            require_once $strFileController;
            $controllerObj=new sedeController($conexion);
            break;
        default:
            $strFileController='intranet/controllers/general_controller.php';
            require_once $strFileController;
            $controllerObj=new generalController();
            break;
    }
    return $controllerObj; 
    }

    function launchAction($controllerObj){
      #requiere una accion
      if(isset($_GET["accion"])){
          $controllerObj->run($_GET["accion"]);
      }else{
          $controllerObj->run("index");
      }
  }
  ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>



<!--logica interna para conectar a la base de datos-->