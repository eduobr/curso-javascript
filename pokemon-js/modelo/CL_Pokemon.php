<?php

class Cl_Pokemon {

    //DECLARACION DE VARIABLES
    private $id;
    private $nombre;
    private $specialatack;
    private $atack;
    private $defense;
    private $movimiento1;
    private $movimiento2;
    private $img;
    
    function getPrivateid() { 
         return $this->id; 
    } 
    
    function setid($id) {  
        $this->id = $id; 
    } 
    
    function getnombre() { 
         return $this->nombre; 
    } 
    
    function setnombre($nombre) {  
        $this->nombre = $nombre; 
    } 
    
    function getspecialatack() { 
         return $this->specialatack; 
    } 
    
    function setspecialatack($specialatack) {  
        $this->specialatack = $specialatack; 
    } 
    
    function getatack() { 
         return $this->atack; 
    } 
    
    function setatack($atack) {  
        $this->atack = $atack; 
    } 
    
    function getdefense() { 
         return $this->defense; 
    } 
    
    function setdefense($defense) {  
        $this->defense = $defense; 
    } 
    
    function getmovimiento1() { 
         return $this->movimiento1; 
    } 
    
    function setmovimiento1($movimiento1) {  
        $this->movimiento1 = $movimiento1; 
    } 
    
    function getmovimiento2() { 
         return $this->movimiento2; 
    } 
    
    function setmovimiento2($movimiento2) {  
        $this->movimiento2 = $movimiento2; 
    } 
    
    function getimg() { 
         return $this->img; 
    } 
    
    function setimg($img) {  
        $this->img = $img; 
    } 
    
}
    




?>