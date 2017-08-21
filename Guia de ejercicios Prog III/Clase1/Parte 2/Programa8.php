<!--Aplicación Nº 8 (Carga aleatoria)  
Imprima los valores del vector asociativo siguiente usando la estructura de control foreach : 
$v[1]=90; $v[30]=7; $v['e']=99; $v['hola']= 'mundo';-->

<?php
$v[1]=90; $v[30]=7; $v['e']=99; $v['hola']= 'mundo'; 

echo "</br>"."<font color='blue'><==Comienzo del Programa8==></font>"."</br>";

foreach($v as $clave => $valor){
    echo $clave."=>".$valor."</br>";
}
echo "<font color='blue'><==Fin del Programa8==></font>"."</br>";
?>