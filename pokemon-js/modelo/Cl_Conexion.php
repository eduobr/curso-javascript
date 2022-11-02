<?php
    //  XAMP - WAMP -  LARAGON
class Cl_Conexion {

    // VARIABLES DE CONEXION
    private $host = "localhost:3308";
    private $user = "root";
    private $pass = "";
    private $bd = "pokemon";

    // OBJETO QUE GUARDA LA CONEXION
    private $cone;

    // CONSTRUCTOR SIN PARAMETROS
    function __construct() 
    {
        try {
            $this->cone = mysqli_connect($this->host,$this->user,$this->pass,$this->bd); 
        } catch (Exception $ex){
            echo $ex->getTraceAsString();
        }
    }

    // METODOS ENCARGADOS DE EJECUTAR LOS QUERYS

    // INSERT , UPDATE y DELETE
    public function sqlOperaciones($sql) {
        try {
            $resp = mysqli_query($this->cone,$sql);
            return mysqli_affected_rows($this->cone);    
        } catch (Exception $ex){
            echo $ex->getTraceAsString();
        }
    }

    // SELECT
    public function sqlSeleccion($sql) {
        try {
            $resp = mysqli_query($this->cone,$sql);
            return $resp;
        } catch (Exception $ex){
            echo $ex->getTraceAsString();
        }
    }
}


?>