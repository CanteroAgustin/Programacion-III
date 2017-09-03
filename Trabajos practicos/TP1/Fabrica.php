<?php
include_once "Persona.php";
include_once "Empleado.php";

 class Fabrica {
    private $_empleados;
    private $_razonSocial;

    function __construct($razonSocial){
        $this->_razonSocial = $razonSocial;
        $this->_empleados = array();
    }

    public function AgregarEmpleado($persona){
        array_push($this->_empleados, $persona);
        $this->EliminarEmpleadosRepetidos();
    }

    public function CalcularSueldo(){
        $sueldo = 0;
        foreach($this->_empleados as $empleado){
            $sueldo += $empleado->getSueldo();
        }
        return $sueldo;
    }

    public function EliminarEmpleado($persona){
        $key = array_search($persona, $this->_empleados);
        unset($this->_empleados[$key]);
    }

    public function EliminarEmpleadosRepetidos(){
        $this->_empleados = array_map("unserialize", array_unique(array_map("serialize", $this->_empleados)));
        
    }

    function ToString(){
        $datosEmpleados = "Empleados: "."</br>";
        foreach($this->_empleados as $empleado){
            $datosEmpleados = $datosEmpleados.$empleado->ToString()."</br>";
        }
        return "Fabrica: ".$this->_razonSocial."</br>"."Total a liquidar a empleados: $".$this->CalcularSueldo()."</br>".$datosEmpleados;
    }

    
}

?>