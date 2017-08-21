<!--Aplicación Nº 9 (Arrays asociativos)  
Realizar las líneas de código necesarias para generar un Array asociativo $lapicera, 
que contenga como elementos: ‘ color’ , ‘ marca’ , ‘ trazo’ y ‘ precio’ . 
Crear, cargar y mostrar tres lapiceras.-->

<?php
$lapicera1 = array("Color" => "rojo", "Marca" => "Bic", "trazo" => "fino","precio" => 15.7);
$lapicera2 = array("Color" => "azul", "Marca" => "Parker", "trazo" => "fino","precio" => 30.25);
$lapicera3 = array("Color" => "verde", "Marca" => "Pelikan", "trazo" => "grueso","precio" => 12.1);

echo "</br>"."<font color='blue'><==Comienzo del Programa9==></font>"."</br>";

echo "Lapicera 1:"."</br>";
foreach($lapicera1 as $clave => $valor){
    echo $clave."=>".$valor."</br>";
}
echo "</br>";
echo "Lapicera 2:"."</br>";
foreach($lapicera2 as $clave => $valor){
    echo $clave."=>".$valor."</br>";
}
echo "</br>";
echo "Lapicera 3:"."</br>";
foreach($lapicera3 as $clave => $valor){
    echo $clave."=>".$valor."</br>";
}
echo "<font color='blue'><==Fin del Programa9==></font>"."</br>";
?>