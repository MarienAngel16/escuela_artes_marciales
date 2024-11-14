
<div class="container">
  <div class="row">
    <div class="col">
      <div class="formu">
        <h2>Dar de Alta Usuarios</h2>

        <form action="../../controllers/usuarios.php" method="POST" class="formu_g" style="padding-bottom:30px;">

<div class="mb-3">
    <label for="nombre1" class="form-label">Nombre Completo</label>
    <input type="text" class="form-control form-control-sm" id="nombre1" name="nombre1" placeholder="Introduzca su nombre completo" required="required" >
  </div>
  <div class="mb-3">
    <label for="usuario1" class="form-label">Nombre de Usuario</label>
    <input type="text" class="form-control form-control-sm" id="usuario1" name="usuario1" placeholder="Coloque nombre de usuario" required="required" >
  </div>
  <div class="mb-3">
    <label for="telefono1" class="form-label">Teléfono</label>
    <input type="tel" class="form-control form-control-sm" id="telefono1" name="telefono1" placeholder="Coloque su teléfono" required="required" >
  </div>
  <div class="mb-3">
    <label for="email1" class="form-label">Correo</label>
    <input type="email" class="form-control form-control-sm" id="email1" name="email1" placeholder="Coloque su correo" required="required" >
  </div>
  <div class="mb-3">
    <label for="direccion1" class="form-label">Dirección</label>
    <input type="text" class="form-control form-control-sm" id="direccion1" name="direccion1" placeholder="Coloque su dirección" required="required" >
  </div>
  <div class="mb-3">
    <label for="contrasena1" class="form-label">Contraseña</label>
    <input type="password" class="form-control form-control-sm" id="contrasena1" name="contrasena1" placeholder="Cree una contraseña segura" required="required" >
  </div>
  <div class="mb-3">
    <label for="rol1" class="form-label">Rol a Desempeñar</label>
    
    <select class="form-control" id="rol1" name="rol1" required>        
        <option value="2">Directivo</option>
        <option value="3">Secretario</option>
        <option value="4">Instructor</option>
    </select>
  </div>
  <div class="mb-3">
    <label for="sede1" class="form-label">Sede a escoger</label>
    <select class="form-control" id="sede1" name="sede1" required>

    <?php 
    include_once "../../../config/database.php";
    
    // Corrección de la consulta
    $consulta = "SELECT Id_sede, Nombre_sede FROM Sedes";
    $resultado = mysqli_query($conexion, $consulta);

    // Verificar si la consulta fue exitosa
    if ($resultado && mysqli_num_rows($resultado) > 0) {    
        // Iterar por cada fila del resultado y crear las opciones
        while ($fila = mysqli_fetch_assoc($resultado)) {
            $SedeId = $fila['Id_sede'];
            $SedeNombre = $fila['Nombre_sede'];
            echo '<option value="'. $SedeId .'">'. $SedeId .' - '. $SedeNombre .'</option>';
        }
    } else {
        echo '<option value="">No hay sedes disponibles</option>';
    }
    ?>
    </select>

    
</div>

<div class="mb-3">
<input type='submit' class='btn btn-danger' name='nuevo_usuario' value'Enviar' />
</div>
  
   
</form>


      </div>
    </div>
    <div class="col">
        <!--espacio para la imagen-->
        <img src="../../../public/images/grupo_alta.jpeg" width="500px" class="rounded mx-auto d-block imagen_p" alt="grupo">
    </div> 
  </div>
</div>

