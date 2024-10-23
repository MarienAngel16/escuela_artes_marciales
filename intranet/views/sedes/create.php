<style>
        form {
      width: 400px; /* Ancho del formulario */
      margin: auto;
      margin-bottom:5%;
      margin-top:5%;
      border:2px solid #ff9daa;
      
    }
</style>

<form action="../../controllers/sedes.php" method="POST">
<h5 class="card-title text-center">Dar de Alta Sedes</h5>
<br>
<div class="form-group">
    <label for="sede1">Nombre de la Sede</label>
    <input type="text" class="form-control" id="sede1" name="sede1" placeholder="Introduzca el nombre de la sede" required="required" >
  </div>
  <div class="form-group">
    <label for="pais1">País donde esta la Cede</label>
    <input type="text" class="form-control" id="pais1" name="pais1" placeholder="Coloque nombre del país dónde esta la sede" required="required" >
  </div>
  <div class="form-group">
    <label for="dicsede1">Dirección de la Sede</label>
    <input type="text" class="form-control" id="dicsede1" name="dicsede1" placeholder="Coloque la dirección de la sede" required="required" >
  </div>
  <div class="form-group">
    <label for="telsede1">Teléfono de la Sede</label>
    <input type="text" class="form-control" id="telsede1" name="telsede1" placeholder="Coloque el teléfono de la sede" required="required" >
  </div>
  
    <button type="submit" class="btn btn-primary">Dar de alta una Sede</button>
</form>