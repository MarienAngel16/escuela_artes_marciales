<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador de Usuarios</title>

     <!-- Conexión Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
     <!-- Hoja de Estilos -->
    <link rel="stylesheet" href="../../assets/css/style.css">

</head>

<body>
  
   <header>
    
    <?php include_once "../shared/header.php" ?>    

            <!-- Columna para la barra de navegación -->
            <div class="col-lg-4 col-md-6 col-sm-12">
            <nav class="navbar navbar-expand-lg navbar-light">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav ml-auto">
                        <a class="nav-item nav-link active boton" href="#">Cuenta</a>
                        <a class="nav-item nav-link boton" href="#">Dar de Alta</a>
                    </div>
                </div>
            </nav>
        </div>
        
    </div> <!-- Cierre de row -->
</div> <!-- Cierre de Container -->

   </header>

   

   <main>

   <?php include_once "create.php" ?>   

   </main>

   <footer>
   <?php include_once "../shared/footer.php" ?>
   </footer>

</body>

</html>