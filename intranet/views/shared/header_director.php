<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador de la Escuela</title>

    <!-- Conexión Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- Enlace al archivo CSS -->
    <link rel="stylesheet" href="public/css/style.css">

</head>
<body style="background-image:url('public/images/image_director.jpeg') ;
background-size: cover; /* Ajusta el tamaño de la imagen para que cubra todo el fondo */ 
background-repeat: no-repeat; /* Evita que la imagen se repita */ 
background-position: center; /* Centra la imagen en el fondo */">

<div class="container-fluid" style="background-color:#bf0603;">
    <div class="row align-items-center">
        
        <!-- Columna para el logo -->
        <div class="col">
            <img class="logo" 
                style="width: 100%; max-width: 700px; height: 150px; object-fit: cover; margin: 5px 0px 5px 10px;" 
                src="public/images/logo_alargado.png" 
                alt="Logo de la Escuela">    
        </div>
        
        <div class="col">
            <nav>               
                        <ul class="menu">
                            <li><a href="index.php?controller=cuenta&accion=cuenta">Mi Cuenta</a></li>                                     
                            <li><a href="index.php?controller=sedes&accion=visualizar">Ver Sedes</a></li>
                            <li><a href="index.php?controller=grupos&accion=crear">Alta Grupos</a></li>
                            <li><a href="index.php?controller=grupos&accion=visualizar">Ver Grupos</a></li>
                            <li><a href="index.php?controller=alumnos&accion=crear">Alta Alumnos</a></li>
                            <li><a href="logout.php" style="margin-left:  80px;">Salir</a></li>
                      </ul>                
                    </nav>
            
        </div><!-- Cierre de col -->
        
    </div> <!-- Cierre de row -->
</div> <!-- Cierre de Container Navegación-->

                     



                            
                        
                                      



        
