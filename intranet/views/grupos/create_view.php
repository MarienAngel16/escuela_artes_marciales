<div class="container">
<div class="row">
    <div class="col">
    <!-- Espacio para el form-->
    <div class="formu">
        <h2>Registro Grupo</h2>
        <form action="grupos_controller.php" method="post">
        <div class="mb-3">
            <label for="numero_grupo" class="form-label">Numero de Grupo</label>
            <input type="text" name="numero" class="form-control form-control-sm" id="numero_grupo" placeholder="ej.1321">
        </div>
        <div class="mb-3">
            <select name="disciplina" id="disciplina" class="form-select form-select-sm">
                <option value="ninguna" selected>Selecciona tu disciplina</option>
                <option value="Kung-fu">Kung-fu</option>
                <option value="Kick Boxing">Kick Boxing</option>
                <option value="Box">Box</option>
                <option value="Karate">Karate</option>
                <option value="Judo">Judo</option>
                <option value="Jui-Jitsu">Jui-Jitsu</option>
                <option value="Muay Thai">Muay Thai</option>
                <option value="Krav Maga">Krav Maga</option>
                <option value="Kendo">Kendo</option>
                <option value="Taekwondo">Taekwondo</option>
                <option value="Ninjutsu">Ninjutsu</option> 
            </select>
        </div>
        <div class="mb-3">
            <label for="horario_grupo" class="form-label">Horario</label>
            <input type="text" class="form-control form-control-sm" name="horario" id="horario_grupo" placeholder="ej.Lunes, Miercoles,Viernes de 7:00 a 8:00 am">
        </div>
            <div class="mb-3">
                <label for="sala_grupo" class="form-label">Sala</label>
                <input type="text" class="form-control form-control-sm" name="sala" id="sala_grupo" placeholder="ej.Luna">
            </div>
            <div class="mb-3">
                <label for="cupo_grupo" class="form-label">Cupo máximo de participantes en el </label>
                <input type="text" class="form-control form-control-sm" name="cupo" id="cupo_grupo" placeholder="ej.15">
            </div>
            <?php
            echo $html;
            ?>
            </form>
        </div>
        </div>
        <div class="col">
        <!--espacio para la imagen-->
        <img src="../../public/images/grupo_alta.jpeg" width="500px" class="rounded mx-auto d-block imagen_p" alt="grupo">
        </div>            
    </div>
</div>