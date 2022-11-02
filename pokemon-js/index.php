<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php
        include 'header.php';
    ?>

</head>

<body>

    <?php
    /*
        include 'navbar.php';
    */
    ?>

    <div class="container">
        <div class="row">
            <div class="center-align">
                <h1>Login Pokemon</h1>
                <div class="divider"></div>
                    <div class="input-field col s6">
                        <i class="material-icons prefix">email</i>
                        <input id="txtEmail" name="txtEmail" type="email" class="validate">
                        <label for="txtEmail">Ingrese Email</label>
                    </div>
                    <div class="input-field col s6">
                        <i class="material-icons prefix">lock</i>
                        <input id="txtPass" name="txtPass" type="password" class="validate">
                        <label for="txtPass">Ingrese Contraseña</label>
                    </div>
                    <br>
                    <button id="btnGuardar" class="btn waves-effect waves-light red darken-4" onclick="loginUsuario()">
                        Logearse
                        <i class="material-icons right">send</i>
                    </button>
                    <button id="btnLogin" name="btnLogin" class="btn waves-effect waves-light" onclick="guardarUsuario()">
                        Registro
                        <i class="material-icons right">supervisor_account</i>
                    </button>
               
                <br>

                <div id="respuesta">

                </div>
            </div>
        </div>
    </div>

    <script src="js/appfirebase.js"></script>
</body>

</html>