<?php
include_once "Estacionamiento.php";
$vehiculosFacturados = Estacionamiento::RecuperarAutosFacturados();
echo "<h2>Vehiculos facturados</h2>";
echo "<table border=1><th> patente </th><th>Salida</th><th>Saldo</th>";
foreach($vehiculosFacturados as $vehiculo2){
    echo "<tr><td>".$vehiculo2->getPatente()."</td> <td>".$vehiculo2->getFechaDeEntrada()."</td><td>".$vehiculo2->getSaldo()."</td></tr>"; 
}
echo "</table>";
?>