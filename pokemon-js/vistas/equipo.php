<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokedex</title>

    <?php
    include '../header.php';
    ?>

    <script>
        $(document).ready(function(event) {

            $("#btnAgregar").click(function() {
                guardarUsuario();
                $("#txtAccion").val("Agregar");
                $.ajax({
                    type: 'POST',
                    url: "../controladores/Proceso.php",
                    data: $("#formulario").serialize(),
                    success: function(data) {
                        $("#respuesta").html(data);
                    }
                });
            });

            $("#btnEliminar").click(function() {
                $("#txtAccion").val("Eliminar");
                $.ajax({
                    type: 'POST',
                    url: "../controladores/Proceso.php",
                    data: $("#formulario").serialize(),
                    success: function(data) {
                        $("#respuesta").html(data);
                    }
                });
            });

            $("#btnListar").click(function() {
                $("#txtAccion").val("Listar");
                $.ajax({
                    type: 'POST',
                    url: "../controladores/Proceso.php",
                    data: $("#formulario").serialize(),
                    success: function(data) {
                        $("#respuesta").html(data);
                    }
                });
            });

        });
    </script>
</head>

<body>
    <?php if (isset($_SESSION["usuario"])) { ?>

        <?php
        include '../navbar.php';
        ?>
        <div class="container">
            <div class="row">
                <div class="col s12">
                    <p>Bienvenido: <?php echo $_SESSION["usuario"]; ?></p>
                    <div class="divider"></div>

                    <div class="input-field col s9">
                        <select id="cboPokemon" name="cboPokemon">
                            <option value="0" disabled selected>Elige el Pokemon</option>
                        </select>
                        <label>Selecciona Pokemon</label>
                    </div>
                    <div class="input-field col s3">
                        <button id="btnSelectPokemon" class="btn waves-effect waves-light red darken-4">
                            Seleccionar
                            <i class="material-icons right">check</i>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <form action="../controladores/Proceso.php" method="POST">

            <div class="container">
                <div class="row" id="seleccion" style="display: none;">
                    <h4 class="center-align">Pokemon Seleccionado</h4>
                    <div class="divider" style="margin-bottom: 10px;"></div>
                    <div class="col s6 offset-s3 valign">
                        <div class="card blue-grey darken-1 center-align">
                            <div class="card-content white-text">
                                <span class="card-title" id="nombre-pokemon">Nombre Pokemon</span>
                                <img id="imgPokemon" src="">
                                <p></p>
                                <table>
                                    <thead>
                                        <tr>
                                            <th scope="col" colspan="2">Estadísticas</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Special Attack:</td>
                                            <td id="special-attack">sada</td>
                                        </tr>
                                        <tr>
                                            <td>Attack:</td>
                                            <td id="attack">sadasd</td>
                                        </tr>
                                        <tr>
                                            <td>Defense:</td>
                                            <td id="defense">sadsad</td>
                                        </tr>
                                        <tr>
                                            <td>Movimiento 1</td>
                                            <td id="movimiento2">sadsad</td>
                                        </tr>
                                        <tr>
                                            <td>Movimiento 2</td>
                                            <td id="movimiento1">sadsad</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="card-action">
                                <input type="button" name="btnAccion" id="btnAgregarStorage" class="btn red" value="Agregar al Storage">
                                <input type="button" name="btnAccion" id="btnAgregarEquipo" class="btn green" value="Agregar al Equipo">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <h4 class="center-align">Equipo</h4>
                    <div class="divider" style="margin-bottom: 10px;"></div>
                    <div class="col m3">
                        <div class="card blue-grey darken-1 center-align">
                            <div class="card-content white-text">
                                <span class="card-title">Nombre Pokemon</span>
                                <img src="">
                                <p></p>
                            </div>
                            <div class="card-action">
                                <input type="button" name="btnAccion" id="btnAgregar" class="btn red" value="Agregar">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <h4 class="center-align">Storage</h4>
                    <div class="divider" style="margin-bottom: 10px;"></div>
                    <div class="col m3">
                        <div class="card blue-grey darken-1 center-align">
                            <div class="card-content white-text">
                                <span class="card-title">Nombre Pokemon</span>
                                <img src="">
                                <p></p>
                            </div>
                            <div class="card-action">
                                <input type="button" name="btnAccion" id="btnAgregar" class="btn blue" value="Agregar al Equipo">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <h1>Respu</h1>
            <div id="respuesta">

            </div>

            </div>
        </form>
    <?php } else { ?>
        <div class=""><strong>Error: Usuario no esta registrado, <a href="../index.php">haga click aca para registrarse</a></strong> </div>
    <?php } ?>

    <script src="../js/seleccion.js"></script>

</body>

</html>