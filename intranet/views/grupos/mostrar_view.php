<div class="container">
  <div class="row" style="padding: 80px ;">
    <div class="col sm-12">
       <h2>Lista de Grupos</h2>
        <div class="input-group"> <span class="input-group-addon">Filtrado</span>
        <input type="text" id="searchInput" onkeyup="filterTable()" class="form-control" placeholder="Buscar grupos...">
        </div>
        <br>
        <table class="table table-striped" id="grupoTable">
        <thead>
            <tr>
                <th>ID Grupo</th>                
                <th>Nombre Grupo</th>
                <th>Disciplina</th>
                <th>Horario</th>
                <th>Sala</th>
                <th>Sede</th>
                <th>Profesor</th>
            </tr>
        </thead>
        <tbody class="contenidobusqueda">
            <?php 
            echo  $html;
            
             ?>
        </tbody>
        </table>

    </div> <!-- Cierre de la Columna -->
    </div>
<?php
if (isset($html_d)){
?>
<div class="row" style="padding: 80px;">
    <div class="col sm-12">
    <h2>Lista de Alumnos por Grupo</h2>
         <div class="input-group"> <span class="input-group-addon">Filtrado</span>
         <input type="text" id="searchInput2" onkeyup="filterTable2()" class="form-control" placeholder="Buscar alumnos...">
         </div>
         <br>
         <table class="table table-striped" id="alumnoTable">
            <thead>
            <tr>
                <th>ID Alumno</th>
                <th>Nombre </th>
                <th>Correo</th>
                <th>Edad</th>
                <th>Dirección</th>
                <th>Tel. Propio</th>
                <th>Tel. Emergencia</th>
                <th>ID Grupo</th>
            </tr>
            </thead>
            <tbody class="contenidobusqueda">
            <?php 
            echo  $html_d;            
             ?>
        </tbody>
    </table>
</div>
</div>
<?php}else{?>
<div class="row">
    <div class="col sm-12">
    <img src="public/images/grupo_alta.png" width="500px" class="rounded mx-auto d-block imagen_p" alt="grupo">
    </div>
</div>
<?php }?>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

<!-- Script para filtrar la tabla -->
<script>
function filterTable() {
    // Obtener el valor del input de búsqueda y normalizarlo
    let input = document.getElementById("searchInput");
    let filter = input.value.toLowerCase();
    let table = document.getElementById("grupoTable");
    let rows = table.getElementsByTagName("tr");

    // Recorrer todas las filas de la tabla y ocultar las que no coincidan con el filtro
    for (let i = 1; i < rows.length; i++) {
        let cells = rows[i].getElementsByTagName("td");
        let rowContainsFilter = false;
        
        // Revisar cada celda de la fila para ver si alguna contiene el texto de búsqueda
        for (let j = 0; j < cells.length; j++) {
            if (cells[j].innerText.toLowerCase().includes(filter)) {
                rowContainsFilter = true;
                break;
            }
        }
        
        // Mostrar u ocultar la fila según el resultado del filtro
        rows[i].style.display = rowContainsFilter ? "" : "none";
    }
}

function filterTable2() {
    // Obtener el valor del input de búsqueda y normalizarlo
    let input = document.getElementById("searchInput2");
    let filter = input.value.toLowerCase();
    let table = document.getElementById("alumnoTable");    
    let rows = table.getElementsByTagName("tr");

    // Recorrer todas las filas de la tabla y ocultar las que no coincidan con el filtro
    for (let i = 1; i < rows.length; i++) {
        let cells = rows[i].getElementsByTagName("td");
        let rowContainsFilter = false;
        
        // Revisar cada celda de la fila para ver si alguna contiene el texto de búsqueda
        for (let j = 0; j < cells.length; j++) {
            if (cells[j].innerText.toLowerCase().includes(filter)) {
                rowContainsFilter = true;
                break;
            }
        }
        
        // Mostrar u ocultar la fila según el resultado del filtro
        rows[i].style.display = rowContainsFilter ? "" : "none";
    }
}
</script>

