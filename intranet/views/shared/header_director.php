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