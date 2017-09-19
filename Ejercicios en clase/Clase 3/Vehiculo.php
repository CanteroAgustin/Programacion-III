<?php    

class Vehiculo{
    private $_patente;

    public function __construct($patente) {
       $this->_patente = $patente;
    }

    function getPatente(){
        return $this->_patente;
    }

    function setPatente($patente){
        $this->_patente = $patente;
    }
} 

?>