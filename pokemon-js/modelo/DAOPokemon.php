<?php

class DaoPokemon {
    
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

    public function insertar($pokemon) {
        try {
            $sql = "insert into pokemon VALUES (null,'@nombre','@atack','@special_atack','@defense','@movimiento1','@movimiento2','@img')";
            $sql = str_replace("@nombre",$pokemon->getNombre(),$sql);
            $sql = str_replace("@special_atack",$pokemon->getspecialatack(),$sql);
            $sql = str_replace("@atack",$pokemon->getatack(),$sql);
            $sql = str_replace("@defense",$pokemon->getDefense(),$sql);
            $sql = str_replace("@movimiento1",$pokemon->getMovimiento1(),$sql);
            $sql = str_replace("@movimiento2",$pokemon->getMovimiento2(),$sql);
            $sql = str_replace("@img",$pokemon->getimg(),$sql);
            $registro = $this->cone->sqlOperaciones($sql);
            return $registro;
        } catch (Exception $ex){
            echo $ex->getTraceAsString();
        }
    }

    public function listar() {
        try {
            $sql = "select * from pokemon";
            $registro = $this->cone->sqlSeleccion($sql);
            return $registro;
        } catch (Exception $ex){
            echo $ex->getTraceAsString();
        }
    }

}
