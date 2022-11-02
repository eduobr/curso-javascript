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
        <div class="col s2"></div>
        <div class="col s8">
          <p>Bienvenido: <?php echo $_SESSION["usuario"]; ?></p>
          <div class="divider"></div>

          <div class="input-field col s3">
            <select id="cboTipo">
              <option value="0" disabled selected>Elige el Tipo</option>
            </select>
            <label>Selecciona Tipo</label>
          </div>

          <div class="input-field col s3">
            <select id="cboGeneracion">
              <option value="0" disabled selected>Elige la Generación</option>
            </select>
            <label>Selecciona la Generación</label>
          </div>
          <div class="input-field col s3">
            <input id="txtBuscar" name="txtBuscar" type="text" class="validate">
            <label for="txtBuscar">Buscar Pokemon</label>
          </div>
          <div class="input-field col s3">
            <button id="btnBuscar" class="btn waves-effect waves-light red darken-4" onclick="buscarPokemon()">
              Buscar
              <i class="material-icons right">search</i>
            </button>
          </div>

          <div class="col s12">
            <h4 class="center-align">Pokedex</h4>
            <div class="row center-align" id="pokedex">

            </div>
            <div class="col s12">
              
              <br>
              <div class="divider" style="margin-bottom: 10px;"></div>
              <div id="respuesta">

              </div>
            </div>
            <div class="col s2">
              <div id="contenedor">

              </div>
            </div>
          </div>
        </div>


      <?php } else { ?>
        <div class=""><strong>Error: Usuario no esta registrado, <a href="../index.php">haga click aca para registrarse</a></strong> </div>
      <?php } ?>


      <script src="../js/pokedex.js"></script>

</body>

</html>