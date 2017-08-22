<!--Aplicación Nº 10 (Arrays de Arrays)  
Realizar las líneas de código necesarias para generar un Array asociativo y otro indexado que contengan como elementos 
tres Arrays del punto anterior cada uno. Crear, cargar y mostrar los Arrays de Arrays. -->

<?php
$lapicera1 = array("Color" => "rojo", "Marca" => "Bic", "trazo" => "fino","precio" => 15.7);
$lapicera2 = array("Color" => "azul", "Marca" => "Parker", "trazo" => "fino","precio" => 30.25);
$lapicera3 = array("Color" => "verde", "Marca" => "Pelikan", "trazo" => "grueso","precio" => 12.1);
$indexado = array($lapicera1, $lapicera2, $lapicera3);
$asociativo = array("lapicera 1" => $lapicera1, "lapicera 2" => $lapicera2, "lapicera 3" => $lapicera3);

echo "</br>"."<font color='blue'><==Comienzo del Programa10==></font>"."</br>";
echo "<--- Array indexado --->"."</br>";
echo "</br>";
foreach($indexado as $key => $valor){
    echo "Elemento ".$key.":"."</br>";
    foreach($valor as $key => $valor2){
        echo $key.": ".$valor2."</br>";
    }
    echo "</br>";
}

echo "<--- Array asociativo --->"."</br>";
echo "</br>";
foreach($asociativo as $key => $valor){
    echo "Elemento ".$key.":"."</br>";
    foreach($valor as $key => $valor2){
        echo $key.": ".$valor2."</br>";
    }
    echo "</br>";
}

echo "<font color='blue'><==Fin del Programa10==></font>"."</br>";
?>