<?php

include('../modelo/Cl_Conexion.php');
include('../modelo/Cl_Usuario.php');

class DaoUsuario {
    
    // VARIABLE QUE TRABAJA CON LA BD
    private $cone;

    // CONSTRUCTOR SIN PARAMETROS
    function __construct() 
    {
        try {
            $this->cone = new Cl_Conexion(); 
        } catch (Exception $ex){
            echo $ex->getTraceAsString();
        }
    }

    // METODOS CRUD

    public function insertar($usuario) {
        try {
            $sql = "insert into usuarios VALUES (null,'@user','@pass')";
            $sql = str_replace("@user",$usuario->getUser(),$sql);
            $sql = str_replace("@pass",$usuario->getPass(),$sql);
            $registro = $this->cone->sqlOperaciones($sql);
            return $registro;
        } catch (Exception $ex){
            echo $ex->getTraceAsString();
        }
    }

    public function eliminarPorUser($user) {
        try {
            $sql = "delete from usuarios where user = '$user'";
            $registro = $this->cone->sqlOperaciones($sql);
            return $registro;
        } catch (Exception $ex){
            echo $ex->getTraceAsString();
        }
    }

    public function eliminarPorId($id) {
        try {
            $sql = "delete from usuarios where id = $id";
            $registro = $this->cone->sqlOperaciones($sql);
            return $registro;
        } catch (Exception $ex){
            echo $ex->getTraceAsString();
        }
    }

    public function listar() {
        try {
            $sql = "select * from usuarios";
            $registro = $this->cone->sqlSeleccion($sql);
            return $registro;
        } catch (Exception $ex){
            echo $ex->getTraceAsString();
        }
    }

}


?>