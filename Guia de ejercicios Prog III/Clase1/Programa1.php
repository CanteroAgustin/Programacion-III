<!-- Aplicación Nº 1 (Sumar números)  
Confeccionar un programa que sume todos los números enteros desde 1 mientras la suma no supere a 1000. 
Mostrar los números sumados y al finalizar el proceso indicar cuantos números se sumaron.-->
<?php

class SumarNumeros{
    static function SumarNumerosFunction(){
        $sumador = 0;
        $contador = 0;
        for($i=0; $i < 1000; $i++){
            $sumador +=$i;
            $contador ++;    
        }
        echo "Suma de numeros: ".$sumador;
        echo "</br>";
        echo "Cantidad de numeros sumados: ".$contador;
    }
}
    

?>
