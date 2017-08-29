<?php
require "./Validador/validar.php";
class Calculadora{
    
    static function Multiplicar($numero1, $numero2){
        echo "Resultado de la multiplicacion: ".($numero1 * $numero2);
    }

    static function Dividir($numero1, $numero2){
        $validador = new ValidarPhp();
        if(!($validador->EsCero($numero1)) && !($validador->EsCero($numero1))){
            echo "Resultado de la division: ".($numero1 / $numero2);
        }else{
            echo ("No se puede dividir por 0");
        }
        
    }
}

?>