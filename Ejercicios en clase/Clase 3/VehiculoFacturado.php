<?php    

class VehiculoFacturado{
    private $_patente;
    private $_fechaDeEntrada;
    private $_saldo;
    
    public function __construct($patente, $fechaDeEntrada, $saldo) {
       $this->_patente = $patente;
       $this->_fechaDeEntrada = $fechaDeEntrada;
       $this->_saldo = $saldo;
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

    function getSaldo(){
        return $this->_saldo;
    }

    function setSaldo($saldo){
        $this->_saldo = $saldo;
    }
} 
?>