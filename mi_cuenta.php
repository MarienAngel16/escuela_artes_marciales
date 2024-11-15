
<?php
/* session_start(); */

// Verifica si el usuario ha iniciado sesión
if (isset($_SESSION['usuario'])) {
    $nombre = $_SESSION['usuario']['nombre'];
    $telefono = $_SESSION['usuario']['telefono'];
    $email = $_SESSION['usuario']['email'];
    $rol = $_SESSION['usuario']['rol'];

    // Determina el rol del usuario
    switch ($rol) {
        case 1:
            $rol_nombre = "Guardian";
            break;
        case 2:
            $rol_nombre = "Directivo";
            break;
        case 3:
            $rol_nombre = "Secretario";
            break;
        case 4:
            $rol_nombre = "Instructor";
            break;
        default:
            $rol_nombre = "Rol desconocido";
    }
?>

<div class="container text-center">
    <div class="row">
        <div class="col-12 mb-4">
            <h2>Bienvenido, <?php echo $rol_nombre; ?></h2>
        </div>
        
        <div class="col-12 col-md-6 mb-3">
            <b>Nombre:</b>
            <input class="form-control mb-2 bg-warning" type="text" value="<?php echo $nombre; ?>" disabled readonly> 
            
            <b>Teléfono:</b>
            <input class="form-control mb-2 bg-warning" type="text" value="<?php echo $telefono; ?>" disabled readonly>  
            
            <b>E-mail:</b>  
            <input class="form-control mb-2 bg-warning" type="text" value="<?php echo $email; ?>" disabled readonly>
        </div>

        <!-- Imagen de samurai centrada --> 
        <div class="col-12 col-md-6">
            <img class="img-fluid" src="intranet/assets/images/samurai.png.png" alt="Samurai" width="350" height="250">
        </div>
    </div>
</div>

<?php
} else {
    echo "<div class='container text-center'><p>Usuario no autenticado</p></div>";
}
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

