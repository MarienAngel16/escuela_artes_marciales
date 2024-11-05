

<div class="container">
  <div class="row">
    <div class="col">  <!-- Columna para el formulario -->
      <!-- Espacio para el form -->
      <div class="form">
       <form action="../../controllers/usuarios.php" method="POST">
             <h5 class="card-title text-center">Dar de Alta Usuarios</h5>
            <br>
            <div class="form-group">
                  <label for="nombre1">Nombre Completo</label>
                  <input type="text" class="form-control" id="nombre1" name="nombre1" placeholder="Introduzca su nombre completo" required="required" >
            </div>
            <div class="form-group">
                 <label for="usuario1">Nombre de Usuario</label>
                 <input type="text" class="form-control" id="usuario1" name="usuario1" placeholder="Coloque nombre de usuario" required="required" >
            </div>
           <div class="form-group">
                 <label for="telefono1">Teléfono</label>
                 <input type="tel" class="form-control" id="telefono1" name="telefono1" placeholder="Coloque su teléfono" required="required" >
           </div>
           <div class="form-group">
                <label for="email1">Correo</label>
                <input type="email" class="form-control" id="email1" name="email1" placeholder="Coloque su correo" required="required" >
           </div>
           <div class="form-group">
                <label for="direccion1">Dirección</label>
                <input type="text" class="form-control" id="direccion1" name="direccion1" placeholder="Coloque su dirección" required="required" >
           </div>
           <div class="form-group">
                <label for="contrasena1">Contraseña</label>
                <input type="password" class="form-control" id="contrasena1" name="contrasena1" placeholder="Cree una contraseña segura" required="required" >
          </div>
          <div class="form-group">
                <label for="rol1">Rol a Desempeñar</label>
    
          <select class="form-control" id="rol1" name="rol1" required>
               <option value="1">Guardían</option>
               <option value="2">Directivo</option>
               <option value="3">Secretario</option>
               <option value="4">Instructor</option>
          </select>
          </div>

  
          <button type="submit" class="btn btn-primary">Dar de alta Usuario</button>
        </form>

       </div>
    </div>
  </div>
</div>


