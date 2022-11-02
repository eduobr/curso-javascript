<?php
include_once('../modelo/DAOUsuario.php');
include_once('../modelo/Cl_Pokemon.php');

include_once('../modelo/DAOPokemon.php');
include_once('../modelo/DAOStorage.php');


if (isset($_POST["btnAccion"])) {


    $accion = $_POST["btnAccion"];

    if ($accion == "Agregar al Storage") {
        $pokemon = new Cl_Pokemon();
        $pokemon->setNombre($_POST["nombre_poke"]);
        $pokemon->setatack($_POST["attack"]);
        $pokemon->setspecialatack($_POST["special_attack"]);
        $pokemon->setDefense($_POST["defense"]);
        $pokemon->setMovimiento1($_POST["movimiento1"]);
        $pokemon->setMovimiento2($_POST["movimiento2"]);
        $pokemon->setimg($_POST["img"]);
        
        $dao = new DaoPokemon();
        $resp = $dao->insertar($pokemon);
        if ($resp>0) {
            echo "
                <script>M.toast({html: '<span>Registro Correctamente el Pokemon</span>'});</script>
            ";
        }else{
            echo "
            <script>M.toast({html: '<span>No se puedo Guardar el Pokemon</span>'});</script>
            ";
        }
    }

    /*
    if ($accion == "Agregar") {
        $user = $_POST["txtEmail"];
        $pass = $_POST["txtPass"];

        $usuario = new Cl_Usuario();
        $usuario->setUser($user);
        $usuario->setPass($pass);

        $dao = new DaoUsuario();
        $respuesta = $dao->insertar($usuario);

        if ( $respuesta > 0 ) {
            echo "Se inserto";
        } else {
            echo "No Se inserto";
        }
    }

    if ($accion == "Eliminar") {
        $user = $_POST["txtEmail"];

        $dao = new DaoUsuario();
        $respuesta = $dao->eliminarPorUser($user);

        if ( $respuesta > 0 ) {
            echo "Se elimino";
        } else {
            echo "No Se elimino";
        }
    }

    if ($accion == "Listar") {
        $dao = new DaoUsuario();
        $respuesta = $dao->listar();

        echo '<table border="1">';
            echo '<tr>';
                echo '<td>ID</td>';
                echo '<td>USER</td>';
                echo '<td>PASS</td>';
                echo '<td>OPCIONES</td>';
            echo '</tr>';
            while($fila = mysqli_fetch_array($respuesta)) {
                echo '<tr>';
                    echo '<td>'.$fila[0].'</td>';
                    echo '<td>'.$fila[1].'</td>';
                    echo '<td>'.$fila[2].'</td>';
                    echo '<td><a href="../controladores/Proceso.php?eliminar='.$fila[0].'" class="btn red">Eliminar</a></td>';
                echo ' </tr>';
            }
        echo '</table>';

    }*/
}
