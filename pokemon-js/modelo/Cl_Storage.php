<?php 

class Cl_storage {
    private $id = '';
    private $isEquipo = 0;
    private $correo ='';
    private $idPokemon ='';

    function __construct() {

    }

    function getId() {
        return $this->id;
    }

    function setId($id) {
        $this->id = $id;
    }

    function getidEquipo() {
        return $this->isEquipo;
    }

    function setisEquipo($isEquipo) {
        $this->isEquipo = $isEquipo;
    }

    function getCorreo() {
        return $this->correo;
    }

    function setCorreo($correo) {
        $this->correo = $correo;
    }

    function getidPokemon() {
        return $this->idPokemon;
    }

    function setidPokemon($idPokemon) {
        $this->idPokemon = $idPokemon;
    }
}
 
?>