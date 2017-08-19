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
    date_default_timezone_set('America/Argentina/Buenos_Aires'); 
    $horaActual = time();
    $fechaActual =  new DateTime(date("d-m-o", $horaActual));
    $estacionActual = "";
    $comienzoPrimavera =  new DateTime("21-09-2017");
    $comienzoVerano = new DateTime("21-12-2017");
    $comienzoOtoño = new DateTime("21-03-2017");
    $comienzoInvierno = new DateTime("21-06-2017");
    
    echo "<font color='blue'><==Comienzo del Programa2==></font>"."</br>";
    echo date("d/m/Y", $horaActual)."</br>";
    echo date("m-d-y", $horaActual)."</br>";
    echo date(DATE_RFC2822, $horaActual)."</br>";
    echo "Estacion actual: ";
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