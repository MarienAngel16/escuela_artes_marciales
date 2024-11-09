
<div class="container">
  <div class="row">
    <div class="col">
      <div class="formu">
        <h2>Dar de Alta Sedes</h2>

        
        <form action="../../controllers/sedes.php"  method="POST" class="formu_g">
      
        <div class="mb-3">
           <label for="sede1">Nombre de la Sede</label>
           <input type="text" class="form-control" id="sede1" name="sede1" placeholder="Introduzca el nombre de la sede" required="required" >
        </div>
        <div class="mb-3">
           <label for="pais1">País donde esta la Sede</label>
           <input type="text" class="form-control" id="pais1" name="pais1" placeholder="Coloque nombre del país dónde esta la sede" required="required" >
        </div>
        <div class="mb-3">
           <label for="dicsede1">Dirección de la Sede</label>
           <input type="text" class="form-control" id="dicsede1" name="dicsede1" placeholder="Coloque la dirección de la sede" required="required" >
        </div>
        <div class="mb-3">
           <label for="telsede1">Teléfono de la Sede</label>
           <input type="text" class="form-control" id="telsede1" name="telsede1" placeholder="Coloque el teléfono de la sede" required="required" >
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