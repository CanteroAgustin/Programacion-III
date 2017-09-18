<?php    

class VehiculoEstacionado{
    private $_patente;
    private $_fechaDeEntrada;
    
    public function __construct($patente, $fechaDeEntrada) {
       $this->_patente = $patente;
       $this->_fechaDeEntrada = $fechaDeEntrada;
    }

    function getPatente(){
        return $this->_patente;
    }

    function setPatente($fecha){
        $this->_fechaDeEntrada = $fecha;
    }

    function getFechaDeEntrada(){
        return $this->_fechaDeEntrada;
    }

    function setFechaDeEntrada($fecha){
        $this->_fechaDeEntrada = $fecha;
    }
} 
?>