<div class="container">
  <div class="row">
    <div class="col">
      <div class="formu">
        <h2>Dar de Alta Participantes</h2>

        
        <form action="../../controllers/sedes.php"  method="POST" class="formu_g">
      
        <div class="mb-3">
           <label for="alumno1">Nombre </label>
           <input type="text" class="form-control" id="alumno1" name="alumno1" placeholder="Introduzca el nombre del participante" required="required" >
        </div>
        <div class="mb-3">
           <label for="correo1">Email</label>
           <input type="mail" class="form-control" id="correo1" name="correo1" placeholder="Coloque el correo del participante" required="required" >
        </div>
        <div class="mb-3">
           <label for="edad1">Edad </label>
           <input type="text" class="form-control" id="edad1" name="edad1" placeholder="Coloque la edad del participante" required="required" >
        </div>
        <div class="mb-3">
           <label for="direccion1">Dirección</label>
           <input type="text" class="form-control" id="direccion1" name="direccion1" placeholder="Coloque la dirección del participante" required="required" >
        </div>
        <div class="mb-3">
           <label for="telefono1">Telefono Propio</label>
           <input type="text" class="form-control" id="telefono1" name="telefono1" placeholder="Coloque el teléfono propio del participante" required="required" >
        </div>
        <div class="mb-3">
           <label for="emergencia1">Telefono de Emergencia</label>
           <input type="text" class="form-control" id="emergencia1" name="emergencia1" placeholder="Coloque un teléfono de emergencia del participante" required="required" >
        </div>

        <div class="mb-3">
          <label for="grupo1" class="form-label">Grupo a Escoger</label>
            <select class="form-control" id="grupo1" name="grupo1" required>

              <?php 
              include_once "../../../config/database.php";
    
              // Corrección de la consulta
              $consulta = "SELECT Id_grupo, Numero_grupo, Disciplina, Horario, Sala, Cupo FROM Grupos";
              $resultado = mysqli_query($conexion, $consulta);

              // Verificar si la consulta fue exitosa
              if ($resultado && mysqli_num_rows($resultado) > 0) {    
              // Iterar por cada fila del resultado y crear las opciones
              while ($fila = mysqli_fetch_assoc($resultado)) {
              $GrupoId = $fila['Id_grupo'];
              $NumGrupo = $fila['Numero_grupo'];
              $DiscGrupo= $fila['Disciplina'];
              $HorarioGrupo=$fila['Horario'];
              $SalaGrupo=$fila['Sala'];
              $CupoGrupo=$fila['Cupo'];
              echo '<option value="'. $GrupoId .'">'. $GrupoId .' - '. $NumGrupo .' - '. $DiscGrupo .' - '. $HorarioGrupo .' - '. $SalaGrupo .' - '. $CupoGrupo .'</option>';
              }
              } else {
              echo '<option value="">No hay grupos disponibles</option>';
                     }
              ?>
            </select>

    
</div>
  
        <input type='submit' class='btn btn-danger' name='nueva_sede' value'Enviar' />

        </form>

      </div>
    </div>
    <div class="col">
              <!--espacio para la imagen-->
              <img src="../../../public/images/grupo_alta.jpeg" width="500px" class="rounded mx-auto d-block imagen_p" alt="grupo">
    </div>
  </div>
</div>