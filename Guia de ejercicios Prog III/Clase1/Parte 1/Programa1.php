<!-- Aplicación Nº 1 (Sumar números)  
Confeccionar un programa que sume todos los números enteros desde 1 mientras la suma no supere a 1000. 
Mostrar los números sumados y al finalizar el proceso indicar cuantos números se sumaron.-->
<?php
    $i = 1;
    $sumador = 0;
    $contador = 0;
    while($sumador < 1000){
        $i++;
        $sumador +=$i;
        $contador ++;    
    }
    $sumador -= $i;
    echo "<font color='blue'><==Comienzo del Programa1==></font>"."</br>";
    echo "Suma de numeros: ".$sumador."</br>";
    echo "Cantidad de numeros sumados: ".$contador."</br>";
    echo "<font color='blue'><==Fin del Programa1==></font>"."</br>";
    echo "</br>";
?>

