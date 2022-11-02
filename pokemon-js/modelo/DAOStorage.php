<?php

class DAOstorage {
    
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

    public function insertar($storage) {
        try {
            $sql = "insert into storage VALUES (null,'@idEquipo','@idPokemon','@correo')";
            $sql = str_replace("@idEquipo",$storage->getidEquipo(),$sql);
            $sql = str_replace("@idPokemon",$storage->getidPokemon(),$sql);
            $sql = str_replace("@correo",$storage->getCorreo(),$sql);
            $registro = $this->cone->sqlOperaciones($sql);
            return $registro;
        } catch (Exception $ex){
            echo $ex->getTraceAsString();
        }
    }
    //1-0
    public function update($idStorage,$isEquipo,$correo)
    {
        try {
            $sql = "update storage set isEquipo="+$isEquipo+" WHERE correo="+$correo+" AND id="+$idStorage;
            $registro = $this->cone->sqlOperaciones($sql);
            return $registro;
        } catch (Exception $ex) {
            echo $ex->getTraceAsString();
        }
    }

    public function listar() {
        try {
            $sql = "select * from storage";
            $registro = $this->cone->sqlSeleccion($sql);
            return $registro;
        } catch (Exception $ex){
            echo $ex->getTraceAsString();
        }
    }

}


?>