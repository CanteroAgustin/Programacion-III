<?php

 abstract class Persona{
    private $_apellido;
    private $_nombre;
    private $_dni;
    private $_sexo;

    function __construct($nombre, $apellido, $dni, $sexo){
        $this->_apellido = $apellido;
        $this->_nombre = $nombre;
        $this->_dni = $dni;
        $this->_sexo = $sexo;
    }

    public function getApellido(){
        return $this->_apellido;
    }

    public function getNombre(){
        return $this->_nombre;
    }

    public function getDni(){
        return $this->_dni;
    }

    public function getSexo(){
        return $this->_sexo;
    }

    function ToString(){
        return $this->getNombre()."-".$this->getApellido()."-".$this->getSexo()."-".$this->getDni();
    }

    abstract function hablar($idioma);


}

?>