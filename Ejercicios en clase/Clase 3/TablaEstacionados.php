<?php
include_once "Estacionamiento.php";
$vehiculosEstacionados = Estacionamiento::RecuperarAutosDeArchivo();
echo "<h2>Vehiculos estacionados</h2>";
echo "<table border=1><th> patente </th><th> Ingreso</th>";
foreach($vehiculosEstacionados as $vehiculo){
    echo "<tr><td>".$vehiculo->getPatente()."</td> <td>".$vehiculo->getFechaDeEntrada()."</td></tr>"; 
}
echo "</table>";
?>

    
