<div class="container my-2" style="padding: 50px;">
    <h2>Visualización de Usuarios</h2>
    
    <!-- Filtro de búsqueda -->
    <div class="mb-2">
        <input type="text" id="searchInput" onkeyup="filterTable()" class="form-control" placeholder="Buscar usuarios...">
    </div>
    <!--boton para editar-->
    <div class="d-grid gap-2 col-3 mx-auto">
 <!--<button type="button " class="btn btn-warning">Editar usuario</button>-->
</div>
    <!--tabla-->
    <table class="table" id="userTable">
        <thead>
            <tr>
                <th>Id usuario</th>
                <th>Nombre</th>
                <th>Teléfono</th>
                <th>Email</th>
                <th>Dirección</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            echo $html;
            ?>
        </tbody>
    </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

<!-- Script para filtrar la tabla -->
<script>
function filterTable() {
    // Obtener el valor del input de búsqueda y normalizarlo
    let input = document.getElementById("searchInput");
    let filter = input.value.toLowerCase();
    let table = document.getElementById("userTable");
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
