<!--Aplicación Nº 6 (Carga aleatoria)  
Definir un Array de 5 elementos enteros y asignar a cada uno de ellos un número (utilizar la función rand ). 
Mediante una estructura condicional, determinar si el promedio de los números son mayores, menores o iguales que 6. 
Mostrar un mensaje por pantalla informando el resultado.-->

<?php
    $sum = 0;
    $num = array (1=>rand(1,10),2=>rand(1,10),3=>rand(1,10),
    4=>rand(1,10),5=>rand(1,10));

    foreach ($num as $valor){
        $sum += $valor;
    }
    $average = $sum/5;
    
    echo "<font color='blue'><==Comienzo del Programa6==></font>"."</br>";
    if($average < 6){
        echo("El promedio es menor a 6");
    }elseif($average > 6){
        echo("El promedio es mayor a 6");
    }else{
        echo("El promedio es igual a 6");
    }
    echo "</br>"."<font color='blue'><==Fin del Programa6==></font>"."</br>";


?>