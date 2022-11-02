<?php

class Cl_Usuario {

    //DECLARACION DE VARIABLES
    private $user;
    private $pass;

    function __construct() {

    }
    
    // METODOS GET Y SET
    function getUser() {
        return $this->user;
    }

    function setUser($user) {
        $this->user = $user;
    }

    function getPass() {
        return $this->pass;
    }

    function setPass($pass) {
        $this->pass = $pass;
    }

}
    

?>