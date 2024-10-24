<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../../assets/css/style.css">

  </head>
  <body>
    <!--HEADER-->
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="header_1">
                    HEADER
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="info_grupo">
                    <p>Grupo: 001 - Sala: Sol - Jiu Jitsu</p>
                    <img src="editar_img.png" alt="Editar_gurpo" width="34px">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="grupo">
                    <div class="horario">
                        <p>Horario: Lunes y Jueves de 6:00pm a 8:00pm</p>
                    </div>              
                </div>
                <div class="profesor">
                    <p>Profesor: Luis Valdez Sánchez   Email: valdez_luis12@gmail.com   Teléfono: 5519862112</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <table class="table">
                    <thead>
                        <tr>
                            <!-- <th scope="col">Número</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Edad</th>
                            <th scope="col">Dirección</th>
                            <th scope="col">Correo</th>
                            <th scope="col">Telefono Propio</th>
                            <th scope="col">Telefono de Emergencias</th>
                            <th scope="col">Editar</th>
                            <th scope="col">Eliminar</th> -->
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <form action="Vista_edicion_user.php" method="post">
                                <th scope="row">
                                    <div>
                                        <label  class="form-label num">
                                            Número 
                                        </label>
                                        <p>1</p>
                                    </div>
                                </th>
                                <td>
                                    <div>
                                        <label for="name_user" class="form-label">
                                            Nombre
                                        </label>
                                        <input type="text" name="name_user" id="name_user" value="Sebastian Rodríguez" class="form-control">
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <label for="edad" class="form-label">
                                            Edad
                                        </label>
                                        <input type="text" name="edad" id="edad" value="12" class="form-control">
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <label for="address" class="form-label">
                                            Dirección
                                        </label>
                                        <input type="text" name="address" id="address" value="Cuautitlan Izcali #19" class="form-control">
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <label for="user_email" class="form-label">
                                            Correo
                                        </label>
                                        <input type="text" name="user_email" id="user_email" value="sebas.dtd3@gmail.com" class="form-control">
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <label for="user_telephone" class="form-label">
                                            Telefono Propio
                                        </label>
                                        <input type="text" name="user_telephone" id="user_telephone" value="5512123132" class="form-control">
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <label for="emergency_telephone" class="form-label">
                                            Telefono de Emergencias
                                        </label>
                                        <input type="text" name="emergency_telephone" id="emergency_telephone" value="5512123132" class="form-control">
                                    </div>
                                </td>
                                <td>
                                    <button type="submit" name="editar" class="btn_color">Editar</button>
                                    <input type="hidden" name="clave_id_user">
                                </td>
                                <td>
                                    <button type="submit" name="eliminar" class="btn_color">Eliminar</button>
                                    <input type="hidden" name="clave_id_user">
                                </td>
                            </form>
                        </tr>
                        <tr>
                            <form action="Vista_edicion_user.php" method="post">
                                <th scope="row">
                                    <div>
                                        <label  class="form-label num">
                                            Número 
                                        </label>
                                        <p>2</p>
                                    </div>
                                </th>
                                <td>
                                    <div>
                                        <label for="name_user" class="form-label">
                                            Nombre
                                        </label>
                                        <input type="text" name="name_user" id="name_user" value="José Rodríguez" class="form-control">
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <label for="edad" class="form-label">
                                            Edad
                                        </label>
                                        <input type="text" name="edad" id="edad" value="16" class="form-control">
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <label for="address" class="form-label">
                                            Dirección
                                        </label>
                                        <input type="text" name="address" id="address" value="Naulcalpan #18" class="form-control">
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <label for="user_email" class="form-label">
                                            Correo
                                        </label>
                                        <input type="text" name="user_email" id="user_email" value="jose_mcai34@gmail.com" class="form-control">
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <label for="user_telephone" class="form-label">
                                            Telefono Propio
                                        </label>
                                        <input type="text" name="user_telephone" id="user_telephone" value="5512123132" class="form-control">
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <label for="emergency_telephone" class="form-label">
                                            Telefono de Emergencias
                                        </label>
                                        <input type="text" name="emergency_telephone" id="emergency_telephone" value="5512123132" class="form-control">
                                    </div>
                                </td>
                                <td>
                                    <button type="submit" name="Editar" class="btn_color">Editar</button>
                                    <input type="hidden" name="clave_id_user">
                                </td>
                                <td>
                                    <button type="submit" name="eliminar" class="btn_color">Eliminar</button>
                                    <input type="hidden" name="clave_id_user">
                                </td>
                            </form>
                        </tr>
                        <tr>
                            <form action="Vista_edicion_user.php" method="post">
                                <th scope="row">
                                    <div>
                                        <label  class="form-label num">
                                            Número 
                                        </label>
                                        <p>3</p>
                                    </div>
                                </th>
                                <td>
                                    <div>
                                        <label for="name_user" class="form-label">
                                            Nombre
                                        </label>
                                        <input type="text" name="name_user" id="name_user" value="Alberto Rodríguez" class="form-control">
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <label for="edad" class="form-label">
                                            Edad
                                        </label>
                                        <input type="text" name="edad" id="edad" value="14" class="form-control">
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <label for="address" class="form-label">
                                            Dirección
                                        </label>
                                        <input type="text" name="address" id="address" value="Cuautitlan Izcali #14" class="form-control">
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <label for="user_email" class="form-label">
                                            Correo
                                        </label>
                                        <input type="text" name="user_email" id="user_email" value="albet_o245@gmail.com" class="form-control">
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <label for="user_telephone" class="form-label">
                                            Telefono Propio
                                        </label>
                                        <input type="text" name="user_telephone" id="user_telephone" value="5512123132" class="form-control">
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <label for="emergency_telephone" class="form-label">
                                            Telefono de Emergencias
                                        </label>
                                        <input type="text" name="emergency_telephone" id="emergency_telephone" value="5512123132" class="form-control">
                                    </div>
                                </td>
                                <td>
                                    <div class="btn_edit">
                                        <button type="submit" name="Editar" class="btn_color">Editar</button>
                                        <input type="hidden" name="clave_id_user">
                                    </div>
                                </td>
                                <td>
                                    <div class="btn_edit">
                                        <button type="submit" name="eliminar" class="btn_color">Eliminar</button>
                                        <input type="hidden" name="clave_id_user">
                                    </div>
                                </td>
                            </form>
                        </tr>
                        <tr>
                            <form action="Vista_edicion_user.php" method="post">
                                <th scope="row">
                                    <div>
                                        <label  class="form-label num">
                                            Número 
                                        </label>
                                        <p>4</p>
                                    </div>
                                </th>
                                <td>
                                    <div>
                                        <label for="name_user" class="form-label">
                                            Nombre
                                        </label>
                                        <input type="text" name="name_user" id="name_user" value="Daniela Romero Perez" class="form-control">
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <label for="edad" class="form-label">
                                            Edad
                                        </label>
                                        <input type="text" name="edad" id="edad" value="16" class="form-control">
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <label for="address" class="form-label">
                                            Dirección
                                        </label>
                                        <input type="text" name="address" id="address" value="Cuautitlan Izcali #17" class="form-control">
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <label for="user_email" class="form-label">
                                            Correo
                                        </label>
                                        <input type="text" name="user_email" id="user_email" value="daniela_rome2@gmail.com" class="form-control">
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <label for="user_telephone" class="form-label">
                                            Telefono Propio
                                        </label>
                                        <input type="text" name="user_telephone" id="user_telephone" value="5512123132" class="form-control">
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <label for="emergency_telephone" class="form-label">
                                            Telefono de Emergencias
                                        </label>
                                        <input type="text" name="emergency_telephone" id="emergency_telephone" value="5512123132" class="form-control">
                                    </div>
                                </td>
                                <td>
                                    <div class="btn_edit">
                                        <button type="submit" name="Editar" class="btn_color">Editar</button>
                                        <input type="hidden" name="clave_id_user">
                                    </div>
                                </td>
                                <td>
                                    <div class="btn_edit">
                                        <button type="submit" name="eliminar" class="btn_color">Eliminar</button>
                                        <input type="hidden" name="clave_id_user">
                                    </div>
                                </td>
                            </form>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="total_par_d">
                    <p>Cupo Actual: 4/12</p>
                    <form action="Vista_edicion_user.php" method="post">
                        <button type="submit" name="nuevo_participante" class="btn_color">Añadir Participante</button>
                    </form>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="footer_1">
                    FOOTER
                </div>
            </div>
        </div>
    </div>
    <!--HEADER-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>