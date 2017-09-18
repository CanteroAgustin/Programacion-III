<?php    

include "Estacionamiento.php";
$post = $_POST;
$auto = new Vehiculo($_POST['patente']);
$accion = $_POST['accion'];

if($accion == "guardar")
{
    Estacionamiento::Guardar($auto);
    header('Location: index.php');
} elseif($accion == "sacar"){
    Estacionamiento::Sacar($auto);
    header('Location: index.php');
} 
?>