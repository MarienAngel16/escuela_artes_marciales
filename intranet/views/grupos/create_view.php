<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grupos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .formu{
            width: 80%;
            height:91%;
            padding:7px;
            border:5px solid black;
            border-radius:14px;
            margin:10px auto;
            margin-top:25px;
        }
        .formu h2{
            text-align:center;
            font-size:20px;
            margin:14px;
        }
        .formu label,input[type=text]{
            font-size:14px;
        }
        .formu input[type=submit]{
            font-size:16px;
            text-align:center;
            margin:0px 130px;
            font-weight:bold;
        }
        .formu form{
            width:83%;
            margin:2px auto;
        }
        .imagen_p{
            margin-top:100px;
        }
    </style>
</head>
<body>
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
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>