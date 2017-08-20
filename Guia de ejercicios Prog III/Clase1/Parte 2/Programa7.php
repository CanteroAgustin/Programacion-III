<!--Aplicación Nº 7 (Mostrar impares) 
Generar una aplicación que permita cargar los primeros 10 números impares en un Array. 
Luego imprimir (utilizando la estructura for ) cada uno en una línea distinta 
(recordar que el salto de línea en HTML es la etiqueta <br/>). 
Repetir la impresión de los números utilizando las estructuras while y foreach.-->

<?php

$contImpares = 0;

for ($i=0; $contImpares < 10; $i++){
    if($i % 2 != 0){
        $impares[$contImpares] = $i;
        $contImpares++;    
    }
}
$contImpares = 0;

echo "</br>"."<font color='blue'><==Comienzo del Programa7==></font>"."</br>";
echo "Elementos impresos con for tradicional:"."</br>";
for ($i=0; $i < count($impares); $i++){
    $contImpares++;
    echo "Elemento ".$contImpares.": ".$impares[$i]."</br>";
}
echo "</br>";
$contImpares = 0;
echo "Elementos impresos con foreach:"."</br>";
foreach($impares as $valor){
    $contImpares++;
    echo "Elemento ".$contImpares.": ".$valor."</br>";
}
echo "</br>";
$contImpares = 0;
$i = 0;
echo "Elementos impresos con while:"."</br>";
while($i < count($impares)){
    $contImpares++;
    echo "Elemento ".$contImpares.": ".$impares[$i]."</br>";
    $i++;
}
echo "<font color='blue'><==Fin del Programa6==></font>"."</br>";
?>