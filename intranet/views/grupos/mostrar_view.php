
<div class="container">
  <div class="row" >
    <div class="col sm-8" style="margin-top:50px;">
    <h2>Lista de Grupos</h2>
    <div class="input-group"> <span class="input-group-addon">Filtrado</span>
        <input id="entradafilter" type="text" class="form-control">
    </div>
    <table class="table table-striped">
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
            <?php foreach ($groups as $group): ?>
                <tr>
                    <td><a href="#" class="group-link" data-id="<?php echo $group['Id_grupo']; ?>"><?php echo $group['Id_grupo']; ?></a></td>
                    <td><?php echo $group['Numero_grupo']; ?></td>
                    <td><?php echo $group['Disciplina']; ?></td>
                    <td><?php echo $group['Horario']; ?></td>
                    <td><?php echo $group['Sala']; ?></td>
                    <td><?php echo $group['sede_nombre']; ?></td>
                    <td><?php echo $group['profesor_nombre']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>


<!-- Modal para mostrar los alumnos -->
<div class="modal fade" id="studentsModal" tabindex="-1" role="dialog" aria-labelledby="studentsModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="studentsModalLabel">Alumnos del Grupo</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;</button>
            </div>
            <div class="modal-body">
                <ul id="studentsList"></ul>
            </div>
        </div>
    </div>
</div>

</div> <!-- Cierre de la Columna -->

<div class="col sm-2">
<!--espacio para la imagen-->
<img src="../../../public/images/grupo_alta.jpeg" width="500px" class="rounded mx-auto d-block imagen_p" alt="grupo">
</div>

</div>
</div>

<script>
$(document).ready(function () {
    // Filtrado de grupos
    $('#entradafilter').keyup(function () {
        var rex = new RegExp($(this).val(), 'i');
        $('.contenidobusqueda tr').hide();
        $('.contenidobusqueda tr').filter(function () {
            return rex.test($(this).text());
        }).show();
    });

    // Cargar alumnos en el modal al hacer clic en el ID de grupo
    $('.group-link').on('click', function () {
        var groupId = $(this).data('id');
        $.ajax({
            url: 'index.php?controller=grupos&action=showStudents&id=' + groupId,
            method: 'GET',
            success: function (data) {
                $('#studentsList').empty();
                data.forEach(function (student) {
                    $('#studentsList').append('<li>' + student.al_nombre + ' - ' + student.al_email + '</li>');
                });
                $('#studentsModal').modal('show');
            }
        });
    });
});
</script>
