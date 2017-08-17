<!-- Aplicación Nº 2 (Mostrar fecha y estación)  
Obtenga la fecha actual del servidor (función date ) 
y luego imprímala dentro de la página con distintos formatos (seleccione los formatos que más le guste). 
Además indicar que estación del año es. Utilizar una estructura selectiva múltiple.-->
<!--Estaciones	fecha
Primavera	21 de Septiembre
Verano	    21 de Diciembre
Otoño	    21 de marzo
Invierno	21 de junio-->

<?php
    $fechaActual = date('m');
    $estacionActual = "";
    $comienzoPrimavera = date("09");
    $comienzoVerano = date("12");
    $comienzoOtoño = date("03");
    $comienzoInvierno = date("06");
    
    echo "<font color='blue'><==Comienzo del Programa2==></font>"."</br>";
    echo date("d/m/Y")."</br>";
    echo date("m-d-y")."</br>";
    echo date(DATE_RFC2822)."</br>";
    echo "Estacion: ";
    if($fechaActual > $comienzoPrimavera && $fechaActual < $comienzoVerano){
        echo "Primavera";
    }
    if($fechaActual > $comienzoVerano && $fechaActual < $comienzoOtoño){
        echo "Verano";
    }
    if($fechaActual > $comienzoOtoño && $fechaActual < $comienzoInvierno){
        echo "Otoño";
    }
    if($fechaActual > $comienzoInvierno && $fechaActual < $comienzoPrimavera){
        echo "Invierno";
    }

    echo "</br>"."<font color='blue'><==Fin del Programa2==></font>"."</br>";
    
?>