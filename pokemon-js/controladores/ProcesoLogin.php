<?php
session_start();

if ( isset($_GET["btnLogin"]) ) {

    $_SESSION["usuario"] = $_GET["txtEmail"];
    header("Location: ../vistas/equipo.php");

}