<?php     
include "Estacionamiento.php";

$auto = new Vehiculo("GGG-999");
$accion = "sacar";

if($accion == "guardar")
{
    Estacionamiento::Guardar($auto);

} elseif($accion == "sacar"){
    Estacionamiento::Sacar($auto);
} 

?>