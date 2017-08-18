<!--Aplicación Nº 5 (Números en letras)  
Realizar un programa que en base al valor numérico de una variable $num , 
pueda mostrarse por pantalla, el nombre del número que tenga dentro escrito con palabras, 
para los números entre el 20 y el 60.  Por e jemplo, si $num = 43 debe mostrarse por pantalla “cuarenta y tres”.-->

<?php

$num = 43;
echo "</br>"."<font color='blue'><==Comienzo del Programa5==></font>"."</br>";
echo ("Numero a convertir: ".$num);
echo ("</br");
echo ("Numero convertido a letras: ".convertirNumeroALetras($num));
echo ("</br");
echo "<font color='blue'><==Fin del Programa5==></font>"."</br>";
echo ("</br");

function convertirNumeroALetras($num){
    if($num > 19 && $num <61){
        return (obtenerDecena($num));
    }else{
        echo("Numero fuera de rango.");
    }
}

function obtenerDecena($numero){
    $decenas = array (30=>'treinta',40=>'cuarenta',50=>'cincuenta',60=>'sesenta',
    70=>'setenta',80=>'ochenta',90=>'noventa');
    if( $numero <= 29) return basico($numero);
        $x = $numero % 10;
        if ( $x == 0 ) {
            return $decenas[$numero];
        } else{
            return $decenas[$numero - $x].' y '. basico($x);
        }
    }

function basico($numero){
    $valor = array ('uno','dos','tres','cuatro','cinco','seis','siete','ocho',
    'nueve','diez', 'once', 'doce', 'trece', 'catorce', 'quince', 'dieciseis', 'diecisiete', 
    'dieciocho', 'diecinueve', 'veinte', 'veintiuno', 'veintidos', 'veintitres','veinticuatro','veinticinco',
    'veintiséis','veintisiete','veintiocho','veintinueve');
    return $valor[$numero - 1];
}
             
?>
 