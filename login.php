<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Usuario</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>

  <link rel="stylesheet" href="style.css">

  <body>
    <div class="container">

 <form class="form-group">

<div class="bg p-5 border border-5 border-dark rounded">
<!--imagen institutcional-->
<img class="imagen" src="logoInstituto/logorojo.png">
<!--usuario-->
       <label for="exampleFormControlInput1" class="form-label mt-3 fw-semibold"> Usuario </label>
         <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Ingresa el usuario asignado">
<!--contraseña-->
           <label for="exampleFormControlInput1" class="form-label mt-3 fw-semibold">Contraseña</label>
         <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="Ingresa la contraseña asignada">
<!--boton-->

<input type="submit" class="form-control btn-color fw-semibold mt-3" id="exampleFormControlInput1">
 
<!--visualizar grupos-->
<p class="mb-3"></p>
  <a class="lista" href="https://www.mozilla.org/es-ES/">Visualizar grupos únicamente</a>  

</div>
 </form>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>